<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/history', [PageController::class, 'history'])->name('history');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/products/{slug}', [PageController::class, 'productDetail'])->name('products.detail');
Route::get('/products/{slug}/gallery', [PageController::class, 'productGallery'])->name('products.gallery');
