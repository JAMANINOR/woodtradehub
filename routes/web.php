<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\NewsController;


Route::get('/produk/{id}', [HomeController::class, 'show']);


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/shop', [ProductController::class, 'index'])->name('shop.index');

Route::get('/shop/{id}', [ProductController::class, 'show'])->name('shop.show');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');



Route::get('/contact', function () {
    return view('pages.contact');
});

Route::fallback(function () {
    return view('errors.404');
});


// Route untuk halaman utama setelah login
Route::get('/admin', function () {
    return view('pages.index');
})->name('pages.index')->middleware('auth');

// Route untuk halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route untuk proses login
Route::post('/admin', [SessionController::class, 'login'])->name('login.process');

// Route untuk logout
Route::post('/logout', [SessionController::class, 'logout'])->name('logout');

// Route untuk produk yang memerlukan login
Route::middleware(['auth'])->group(function () {
    Route::get('/products', [ProductController::class, 'a_index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}', [ProductController::class, 'a_show'])->name('products.show');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});
