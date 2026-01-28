<?php

namespace App\Http\Controllers;

use App\Services\GoogleDriveService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    protected $driveService;

    public function __construct(GoogleDriveService $driveService)
    {
        $this->driveService = $driveService;
    }

    /**
     * Get sub-folders for a division.
     */
    public function getFolders($division)
    {
        $data = $this->driveService->getSubFolders($division);
        return response()->json(['status' => 'success', 'data' => $data]);
    }

    /**
     * Get photos for a specific folder.
     */
    public function getPhotos($folderId)
    {
        $data = $this->driveService->getPhotos($folderId);
        return response()->json(['status' => 'success', 'data' => $data]);
    }
}
