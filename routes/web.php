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

// Praktikum 1
// 1. Menampilkan Halaman Awal Website / (Halaman Home)
Route::get('/home', [HomeController::class, 'home']);

// 2. Menampilkan Daftar Produk (Route Prefix) / (Halaman Products)
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'edugames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'friendskidsgames']);
    Route::get('/riri-story-books', [ProductController::class, 'riristorybooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakkidssongs']);
});

// 3. Menampilkan Daftar Berita (Route Param) / (Halaman News)
Route::get('/news', [ArticleController::class, 'news']);
Route::get('/news/{string}', [ArticleController::class, 'newsString']);

// 4. Menampilkan Daftar Program (Route Prefix) / (Halaman Program)
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganindustri']);
});

// 5. Menampilkan About Us (Router Biasa) / (Halaman About Us)
Route::get('/about-us', [AboutController::class, 'aboutus']);

// 6. Menampilkan Contact Us (Router Resource Only) / (Halaman Contact Us)
Route::get('/contact-us', [ContactController::class, 'contactus']);

