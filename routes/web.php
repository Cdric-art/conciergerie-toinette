<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('home');

// SERVICES AU QUOTIDIEN
Route::controller(\App\Http\Controllers\ServicesQuotidienController::class)->group(function () {
    Route::get('/services-au-quotidien', 'index')->name('servicesquotidien');
    Route::get('/services-au-quotidien/{category}', 'show')->name('servicesquotidien-category');
});

Route::controller(\App\Http\Controllers\ConciergerieAirbnbController::class)->group(function () {
   Route::get('conciergerie-airbnb', 'index')->name('conciergerie_airbnb');
});

// ADMIN - HOME
Route::controller(\App\Http\Controllers\Admin\HomePostController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::post('/dashboard', 'store')->name('dashboard.store');
    Route::get('dashboard/edit/{homePost}', 'edit')->name('dashboard.edit');
    Route::put('dashboard/update/{homePost}', 'update')->name('dashboard.update');
    Route::delete('/dashboard/{homePost}', 'destroy')->name('dashboard.destroy');
});

// ADMIN - SERVICES AU QUOTIDIEN
Route::controller(\App\Http\Controllers\Admin\ServicesCategoryController::class)->middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
   Route::get('/category-services', 'index')->name('category');
    Route::post('/category-services', 'store')->name('category.store');
    Route::get('/category-services/edit/{category}', 'edit')->name('category.edit');
    Route::put('/category-services/update/{category}', 'update')->name('category.update');
    Route::delete('/category-services/destroy/{category}', 'destroy')->name('category.destroy');
});

Route::controller(\App\Http\Controllers\Admin\ServicesPostController::class)->middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/services/{category}', 'index')->name('services');
    Route::post('/services/create', 'store')->name('services.store');
    Route::get('services/edit/{service}', 'edit')->name('services.edit');
    Route::put('services/update/{service}', 'update')->name('services.update');
    Route::delete('services/destroy/{service}', 'destroy')->name('services.destroy');
});

// ADMIN - CONCIERGERIE AIRBNB
Route::controller(\App\Http\Controllers\Admin\ConciergerieController::class)->middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
   Route::get('/conciergerie', 'index')->name('conciergerie');
});

// AUTH
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
