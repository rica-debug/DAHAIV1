<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

// Rutas principales
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Rutas de productos
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::get('/category/{category}', [ProductController::class, 'category'])->name('category');
    Route::get('/solar-modules', [ProductController::class, 'solarModules'])->name('solar-modules');
    Route::get('/inverters', [ProductController::class, 'inverters'])->name('inverters');
    Route::get('/storage-solutions', [ProductController::class, 'storageSolutions'])->name('storage-solutions');
    Route::get('/ev-charger', [ProductController::class, 'evCharger'])->name('ev-charger');
    Route::get('/{product}', [ProductController::class, 'show'])->name('show');
});
// Otras rutas de tu aplicación
Route::get('/company', [HomeController::class, 'company'])->name('company');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/join', [HomeController::class, 'join'])->name('join');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/statement', [HomeController::class, 'statement'])->name('statement');