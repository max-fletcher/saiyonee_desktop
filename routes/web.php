<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Media library routes
Route::get('/medialibrary', [App\Http\Controllers\chunkUpload\MediaLibraryController::class, 'mediaLibrary'])->name('media-library');

//FILE UPLOADS CONTROLER
Route::post('medialibrary/upload', [App\Http\Controllers\chunkUpload\UploaderController::class, 'upload'])->name('file-upload');
Route::post('medialibrary/delete', [App\Http\Controllers\chunkUpload\UploaderController::class, 'delete'])->name('file-delete');




//Media library routes
// Route::get('/medialibrary', [App\Http\Controllers\chunkUpload\MediaLibraryController::class, 'mediaLibrary'])->name('media-library');

// CONTEST FILES UPLOAD CONTROLLER
Route::post('contest/image_upload', [ContestController::class, 'image_upload'])->name('image-file-upload');
Route::post('contest/image_delete', [ContestController::class, 'image_delete'])->name('image-file-delete');

Route::post('contest/video_upload', [ContestController::class, 'video_upload'])->name('video-file-upload');
Route::post('contest/video_delete', [ContestController::class, 'video_delete'])->name('video-file-delete');
// END CONTEST FILES UPLOAD CONTROLLER






Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/blog-details', [FrontendController::class, 'blogDetails'])->name('blog.details');
Route::get('/story-details', [FrontendController::class, 'storyDetails'])->name('story.details');

Route::get('/contest', [ContestController::class, 'index'])->name('contest.index');
Route::post('/contest/ajax_store', [ContestController::class, 'ajax_store'])->name('contest.ajax_store');

Route::post('/submit_contact_us', [ContactUsController::class, 'submit_contact_us'])->middleware('throttle:5,1440')->name('submit_contact_us');

// url: "{{ env('SAIYONEE_BACKEND_URL') }}" + "api/submit_contact_us_mail",