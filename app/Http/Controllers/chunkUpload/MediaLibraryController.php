<?php

namespace App\Http\Controllers\chunkUpload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaLibraryController extends Controller
{
    /**
     * Get Media Library page
     * @return View
     */
    public function mediaLibrary(Request $request){
        $user_obj = auth()->user();
        return view('file_uploads.medialibrary', ['user_obj' => $user_obj ]);
    }
}
