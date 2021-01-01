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


Route::get('/', [SchoolController::class, 'dashboard'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/submit', [SchoolController::class, 'index'])->name('submit');
    Route::post('/submit', [SchoolController::class, 'store'])->name('submit');
    Route::get('/submit.html', [SchoolController::class, 'index'])->name('submit');
    Route::post('/submit.html', [SchoolController::class, 'store'])->name('submit');
    Route::post('/review', [SchoolController::class, 'addComment'])->name('addComment');
    Route::post('/upload', [ImageUploadController::class, 'uploadImage'])->name('uploadImage');
    Route::post('/uploadImage', [ImageUploadController::class, 'uploadImage'])->name('uploadImage');

});
    Route::post('/search', [SearchController::class,'search']);
    Route::get('/search', [SearchController::class,'paginate']);
Route::get('/dashboard', [SchoolController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboardx', function () {
    return view('dashboard');
})->name('dashboardx');
Route::get('users/{id}', function ($id) {

});
Route::get('/school/{id}', [SchoolController::class, 'school']);
Route::get('/itemModal/{id}', [SchoolController::class, 'itemModal'])->name('itemModal');
Route::get('/contact', [ContactController::class, 'index'])->name('contact-g');
Route::get('/external/_navigation.html/', [SchoolController::class, 'navigation'])->name('navigation');
Route::get('/assets/external/_navigation.html/', [SchoolController::class, 'navigation'])->name('navigation-a');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact');

Route::get('store', [PostController::class, 'store']);
// Route::any('externam/_navigation.html', "SchoolController@navigation")->where("any", "*_navigation.html");
// Route::get('/{url1}', function ($url1) {
//     return 'SchoolController@navigation';
// })->where('url1', '*_navigation*');
