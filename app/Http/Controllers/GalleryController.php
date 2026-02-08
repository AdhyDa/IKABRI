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
     * Get content (folders and photos) for a specific folder ID or Division Name.
     */
    public function getContent($id)
    {
        $data = $this->driveService->getFolderContents($id);
        return response()->json(['status' => 'success', 'data' => $data]);
    }
}
