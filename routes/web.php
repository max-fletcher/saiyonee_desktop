<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/blog-details', [FrontendController::class, 'blogDetails'])->name('blog.details');
Route::get('/story-details', [FrontendController::class, 'storyDetails'])->name('story.details');

Route::post('/submit_contact_us', [ContactUsController::class, 'submit_contact_us'])->name('submit_contact_us');
// ->middleware('throttle:5,86400')

// url: "{{ env('SAIYONEE_BACKEND_URL') }}" + "/api/submit_contact_us_mail",