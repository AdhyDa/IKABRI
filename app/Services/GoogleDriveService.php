<?php

namespace App\Services;

use Google\Client;
use Google\Service\Drive;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class GoogleDriveService
{
    protected $client;
    protected $service;

    // Hardcoded Division Folder IDs (Map Division Name to Drive Folder ID)
    // In production, these should be in .env or config
    protected $divisionFolders = [
        'BPH' => '1xxxxxxxxxxxxxx_YOUR_FOLDER_ID_HERE',
        'HUMINFO' => '1xxxxxxxxxxxxxx_YOUR_FOLDER_ID_HERE',
        'PENALARAN' => '1xxxxxxxxxxxxxx_YOUR_FOLDER_ID_HERE',
        'BAKMIN' => '1f7QRx9vlLueEmCIiHFtmt0Zn9cSJ6lM-',
        'PENGMAS' => '1xxxxxxxxxxxxxx_YOUR_FOLDER_ID_HERE',
        'ORGANISASI' => '1xxxxxxxxxxxxxx_YOUR_FOLDER_ID_HERE',
    ];

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setApplicationName('IKABRI Gallery');
        $this->client->setScopes([Drive::DRIVE_READONLY]);

        // Path to your service account JSON
        $authConfigPath = storage_path('app/google-credentials.json');

        if (file_exists($authConfigPath)) {
            $this->client->setAuthConfig($authConfigPath);
        } else {
            // Log warning if credentials missing (development fallback)
            Log::warning("Google Drive credentials not found at: {$authConfigPath}");
        }

        $this->service = new Drive($this->client);
    }

    /**
     * Get sub-folders (Albums) for a specific division.
     * Logic:
     * 1. Find folder named like "PANITIA" inside the Division Folder.
     * 2. Get children of that "PANITIA" folder.
     */
    public function getSubFolders($divisionId)
    {
        return Cache::remember("gallery_folders_v2_{$divisionId}", 3600, function () use ($divisionId) {
            // 1. Ambil ID Folder PANITIA yang sudah kamu taruh di Config/.env
            $rootFolderId = $this->divisionFolders[$divisionId] ?? null;

            if (!$rootFolderId) return [];

            try {
                // 2. LANGSUNG ambil isi folder tersebut (Day 1, Day 2, dst)
                // Kita menghapus logika pencarian nama 'Dokumentasi'
                $albumParams = [
                    'q' => "'{$rootFolderId}' in parents and mimeType = 'application/vnd.google-apps.folder' and trashed = false",
                    'fields' => 'files(id, name)',
                    'orderBy' => 'name'
                ];

                $albums = $this->service->files->listFiles($albumParams);
                $formattedAlbums = [];

                foreach ($albums->getFiles() as $album) {
                    // Ambil 1 foto cover (thumbnail) dari dalam album ini
                    // Pastikan fungsi getFirstImageInFolder/scanFolder kamu sudah ada
                    $coverImage = $this->getFirstImageInFolder($album->getId());

                    $formattedAlbums[] = [
                        'id' => $album->getId(),
                        'name' => $album->getName(), // Ini akan muncul: "Day 1", "Day 2"
                        'cover' => $coverImage ?? asset('image/placeholder.jpg'),
                        'count' => 'View Gallery'
                    ];
                }

                return $formattedAlbums;

            } catch (\Exception $e) {
                // Log error untuk debugging
                Log::error("Google Drive API Error: " . $e->getMessage());
                return [];
            }
        });
    }

    /**
     * Get photos for a specific folder (Recursive).
     */
    public function getPhotos($folderId)
    {
        return Cache::remember("gallery_photos_{$folderId}", 3600, function () use ($folderId) {
            try {
                return $this->scanFolder($folderId);
            } catch (\Exception $e) {
                Log::error("Google Drive API Error (getPhotos): " . $e->getMessage());
                return [];
            }
        });
    }

    /**
     * Recursive function to scan for images.
     */
    private function scanFolder($folderId)
    {
        $allPhotos = [];

        // List everything in the folder
        $optParams = [
            'q' => "'{$folderId}' in parents and trashed = false",
            'fields' => 'files(id, name, mimeType, webContentLink, thumbnailLink)',
            'pageSize' => 1000 // Adjust page size as needed
        ];

        $results = $this->service->files->listFiles($optParams);

        foreach ($results->getFiles() as $file) {
            if ($file->getMimeType() === 'application/vnd.google-apps.folder') {
                // If folder, Recurse
                $subFolderPhotos = $this->scanFolder($file->getId());
                $allPhotos = array_merge($allPhotos, $subFolderPhotos);
            } elseif (strpos($file->getMimeType(), 'image/') === 0) {
                // If image, Add to list
                // Note: thumbnailLink usually needs adjustment to get hi-res
                $highResThumbnail = str_replace('=s220', '=s600', $file->getThumbnailLink());
                // Or use webContentLink but it sometimes forces download.
                // A common trick is using the file ID to construct a view link or using an API proxy.
                // For this implementation we use thumbnailLink as requested, possibly upscaled.

                $allPhotos[] = [
                    'id' => $file->getId(),
                    'url' => str_replace('=s220', '=s1920', $file->getThumbnailLink()), // Large preview
                    'thumbnail' => $file->getThumbnailLink(), // Grid thumb
                    'name' => $file->getName(),
                    'description' => ''
                ];
            }
        }

        return $allPhotos;
    }

    /**
     * Helper to get a single cover image for an album cover (recursive).
     */
    private function getFirstImageInFolder($folderId)
    {
        // 1. Try finding images directly in this folder
        $optParams = [
            'q' => "'{$folderId}' in parents and mimeType contains 'image/' and trashed = false",
            'fields' => 'files(thumbnailLink)',
            'pageSize' => 1
        ];

        try {
            $results = $this->service->files->listFiles($optParams);
            if (count($results->getFiles()) > 0) {
                return str_replace('=s220', '=s600', $results->getFiles()[0]->getThumbnailLink());
            }

            // 2. If no images, check for subfolders (e.g., "Camera 1", "Panitia")
            $folderParams = [
                'q' => "'{$folderId}' in parents and mimeType = 'application/vnd.google-apps.folder' and trashed = false",
                'fields' => 'files(id)',
                'pageSize' => 1
            ];
            $subFolders = $this->service->files->listFiles($folderParams);
            
            if (count($subFolders->getFiles()) > 0) {
                // Recursively check the first subfolder
                return $this->getFirstImageInFolder($subFolders->getFiles()[0]->getId());
            }

        } catch (\Exception $e) {
            // Ignore errors in helper to prevent breaking the main loop
            return null;
        }

        return null; // No image found
    }
}
