<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\NewsController;

Route::get('/', [HomeController::class, 'index']);


Route::get('/produk/{id}', [HomeController::class, 'show']);


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/shop', [ProductController::class, 'index'])->name('shop.index');

Route::get('/shop/{id}', [ProductController::class, 'show'])->name('shop.show');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// Route::get('shop/{id}', 'ProductController@show')->name('shop.show');


Route::get('/news', 'App\Http\Controllers\NewsController@index')->name('news.index');

Route::get('/news/{news}', 'App\Http\Controllers\NewsController@show')->name('news.show');



Route::get('/contact', function () {
    return view('pages.contact');
});

Route::fallback(function () {
    return view('errors.404');
});


// Route untuk halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route untuk proses login
Route::post('/login', [App\Http\Controllers\SessionController::class, 'login'])->name('login.process');

// Route untuk halaman utama setelah login
Route::get('admin', function () {
    return view('pages.index');
})->name('pages.index')->middleware('auth');
