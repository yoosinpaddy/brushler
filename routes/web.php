<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\SchoolController;

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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::post('/search', [SearchController::class,'search']);
    Route::get('/search', [SearchController::class,'paginate']);
    Route::get('/submit', [SchoolController::class, 'index'])->name('submit');
    Route::post('/submit', [SchoolController::class, 'store'])->name('submit');
    Route::get('/submit.html', [SchoolController::class, 'index'])->name('submit');
    Route::post('/submit.html', [SchoolController::class, 'store'])->name('submit');
    Route::post('/review', [SchoolController::class, 'addComment'])->name('addComment');
    Route::post('/upload', [ImageUploadController::class, 'uploadImage'])->name('uploadImage');
    Route::post('/uploadImage', [ImageUploadController::class, 'uploadImage'])->name('uploadImage');

});


Route::get('users/{id}', function ($id) {

});
Route::get('/school/{id}', [SchoolController::class, 'school']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact');

Route::get('store', [PostController::class, 'store']);
