<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('product')->group(function () {
    // Route::get('/', [App\Http\Controllers\ProductController::class, 'index']);
    Route::get('/product', [App\Http\Controllers\ProductController::class, 'product']);
    Route::get('/electronic', [App\Http\Controllers\ProductController::class, 'electronic'])->name('electronic');
    Route::get('/food',[App\Http\Controllers\ProductController::class, 'food'])->name('food');
});

Route::get('news/{id?}', [App\Http\Controllers\NewsController::class, 'berita'])->name('news');

Route::prefix('program')->group(function () {
    Route::get('/beasiswa', [App\Http\Controllers\ProgramController::class, 'beasiswa'])->name('beasiswa');
    Route::get('/magang', [App\Http\Controllers\ProgramController::class, 'magang'])->name('magang');
});

Route::get('/pageAboutUs', [App\Http\Controllers\AboutUsController::class, 'getAboutUs'])->name('pageAboutUs');

Route::resource('/contact', ContactController::class)->only(['show']);




