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
    protected $divisionFolders = [
        'BPH' => '1IAe_Ra9YEzmlPC6naZXtzUxaUoDQJu7I',
        'HUMINFO' => '1xazr6_1blqK6KhyXDXQSE7SSlkBppg1x',
        'PENALARAN' => '1xxxxxxxxxxxxxx_YOUR_FOLDER_ID_HERE',
        'BAKMIN' => '1IBujP6s4bJeqh0wZxlKEjcc-63hWPAof',
        'PENGMAS' => '1y4zVjjWLLv1haKU2NeSNSTq074T0CyHM',
        'ORGANISASI' => '13lJgU9wxiX533PjSbzD8ooW8_9iNGO0y',
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
     * Mengambil konten (Folder & File) berdasarkan ID.
     * Logika ini dinamis: Apapun ID yang dikirim, dia akan scan isinya.
     */
    public function getFolderContents($folderIdOrDivisionName)
    {
        // 1. Cek apakah inputnya nama divisi (BAKMIN) atau ID Folder biasa
        $targetId = $this->divisionFolders[$folderIdOrDivisionName] ?? $folderIdOrDivisionName;

        // Cache 1 jam agar loading cepat
        return Cache::remember("gallery_v4_{$targetId}", 3600, function () use ($targetId) {
            $folders = [];
            $images = [];

            try {
                // Query: Ambil semua file/folder di dalam parent ID ini yang tidak ada di trash
                $optParams = [
                    'q' => "'{$targetId}' in parents and trashed = false",
                    'fields' => 'files(id, name, mimeType, thumbnailLink)',
                    'orderBy' => 'folder,name',
                    'pageSize' => 1000
                ];

                $results = $this->service->files->listFiles($optParams);

                foreach ($results->getFiles() as $file) {
                    $mime = $file->getMimeType();

                    if ($mime === 'application/vnd.google-apps.folder') {
                        $cover = $this->getFirstImageInFolder($file->getId());

                        $folders[] = [
                            'id' => $file->getId(),
                            'name' => $file->getName(),
                            'cover' => $cover ?? asset('image/placeholder.jpg'), // Default jika folder kosong melompong
                            'type' => 'folder'
                        ];
                    } elseif (strpos($mime, 'image/') === 0) {
                        $images[] = [
                            'id' => $file->getId(),
                            'name' => $file->getName(),
                            'thumbnail' => $file->getThumbnailLink() ? str_replace('=s220', '=s600', $file->getThumbnailLink()) : null,
                            'url' => $file->getThumbnailLink() ? str_replace('=s220', '=s1920', $file->getThumbnailLink()) : null,
                            'type' => 'image'
                        ];
                    }
                }

                return [
                    'folders' => $folders,
                    'images' => $images
                ];

            } catch (\Exception $e) {
                Log::error("Drive API Error: " . $e->getMessage());
                return ['folders' => [], 'images' => []];
            }
        });
    }

    /**
     * Mencari satu gambar untuk cover folder.
     * Fungsi ini akan menggali terus ke dalam sub-folder sampai ketemu gambar.
     */
    private function getFirstImageInFolder($folderId, $depth = 0)
    {
        // Batasi kedalaman pencarian agar tidak infinite loop (maksimal 5 level)
        if ($depth > 5) return null;

        try {
            // 1. Cek apakah ada file gambar langsung di folder ini?
            $optParamsImg = [
                'q' => "'{$folderId}' in parents and mimeType contains 'image/' and trashed = false",
                'fields' => 'files(thumbnailLink)',
                'pageSize' => 1 // Cukup ambil 1 saja
            ];
            $images = $this->service->files->listFiles($optParamsImg);

            if (count($images->getFiles()) > 0) {
                // Ketemu! Kembalikan link thumbnailnya
                return str_replace('=s220', '=s600', $images->getFiles()[0]->getThumbnailLink());
            }

            // 2. Jika tidak ada gambar, cari apakah ada sub-folder?
            $optParamsFolder = [
                'q' => "'{$folderId}' in parents and mimeType = 'application/vnd.google-apps.folder' and trashed = false",
                'fields' => 'files(id)',
                'pageSize' => 3 // Cek 3 folder pertama saja untuk efisiensi
            ];
            $subFolders = $this->service->files->listFiles($optParamsFolder);

            // 3. Loop sub-folder untuk mencari gambar di dalamnya (Recursive)
            foreach ($subFolders->getFiles() as $subFolder) {
                $foundImage = $this->getFirstImageInFolder($subFolder->getId(), $depth + 1);
                if ($foundImage) {
                    return $foundImage;
                }
            }

        } catch (\Exception $e) {
            return null;
        }
        return null; // Benar-benar tidak ada gambar
    }
}
