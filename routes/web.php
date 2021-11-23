<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\BackOfficeController::class, 'index'])->name('dashboard');

Route::get('/newpost', [App\Http\Controllers\NewPostController::class, 'index'])->name('newpost');

// Route post article
Route::post('/newpost/store', [App\Http\Controllers\NewPostController::class, 'store'])->name('newpost');

// Route show detail article
Route::get('/update/{id}', [App\Http\Controllers\BackOfficeController::class, 'detail'])->name('update');

// Route carousel
Route::get('/carousel',  [App\Http\Controllers\CarouselController::class, 'index'])->name('carousel');

// Route update article
Route::put('/update/{id}', [App\Http\Controllers\BackOfficeController::class, 'update'])->name('update');

// Route delete article
Route::get('/destroy/{id}', [App\Http\Controllers\BackOfficeController::class, 'destroy'])->name('dashboard');

// Route store carousel
Route::post('/carousel/store', [App\Http\Controllers\CarouselController::class, 'store'])->name('carousel');

// Route delete carousel
Route::get('/destroy/{id}', [App\Http\Controllers\CarouselController::class, 'destroy'])->name('carousel');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
