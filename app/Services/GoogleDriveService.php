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

        $authConfigPath = storage_path('app/ikabri-gallery-a0512ac3bd12.json');

        if (file_exists($authConfigPath)) {
            $this->client->setAuthConfig($authConfigPath);
        } else {
            Log::warning("Google Drive credentials not found at: {$authConfigPath}");
        }

        $this->service = new Drive($this->client);
    }

    /**
     * Get contents (folders & files) of a specific folder or Division Name
     */
    public function getFolderContents($folderIdOrDivisionName)
    {
        $folderId = $this->divisionFolders[$folderIdOrDivisionName] ?? $folderIdOrDivisionName;

        return Cache::remember("gallery_content_{$folderId}", 3600, function () use ($folderId) {
            $folders = [];
            $images = [];

            try {
                $optParams = [
                    'q' => "'{$folderId}' in parents and trashed = false",
                    'fields' => 'files(id, name, mimeType, thumbnailLink)',
                    'orderBy' => 'folder, name',
                    'pageSize' => 1000
                ];

                $results = $this->service->files->listFiles($optParams);

                foreach ($results->getFiles() as $file) {
                    if ($file->getMimeType() === 'application/vnd.google-apps.folder') {
                        $cover = $this->getFirstImageInFolder($file->getId());

                        $folders[] = [
                            'id' => $file->getId(),
                            'name' => $file->getName(),
                            'cover' => $cover ?? asset('image/placeholder.jpg'),
                            'type' => 'folder'
                        ];
                    } elseif (strpos($file->getMimeType(), 'image/') === 0) {
                        $images[] = [
                            'id' => $file->getId(),
                            'name' => $file->getName(),
                            'thumbnail' => str_replace('=s220', '=s1000', $file->getThumbnailLink()),
                            'url' => str_replace('=s220', '=s1920', $file->getThumbnailLink()),
                            'type' => 'image'
                        ];
                    }
                }

                return [
                    'folders' => $folders,
                    'images' => $images
                ];

            } catch (\Exception $e) {
                Log::error("Google Drive API Error (getFolderContents): " . $e->getMessage());
                return ['folders' => [], 'images' => []];
            }
        });
    }

    /**
     * Helper to get a single cover image for an album cover (recursive).
     */
    private function getFirstImageInFolder($folderId)
    {
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

            $folderParams = [
                'q' => "'{$folderId}' in parents and mimeType = 'application/vnd.google-apps.folder' and trashed = false",
                'fields' => 'files(id)',
                'pageSize' => 1
            ];
            $subFolders = $this->service->files->listFiles($folderParams);

            if (count($subFolders->getFiles()) > 0) {
                return $this->getFirstImageInFolder($subFolders->getFiles()[0]->getId());
            }

        } catch (\Exception $e) {
            return null;
        }

        return null;
    }
}
