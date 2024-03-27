<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('home');

// ADMIN HOME
Route::controller(\App\Http\Controllers\HomePostController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::post('/dashboard', 'store')->name('dashboard.store');
    Route::get('dashboard/edit/{homePost}', 'edit')->name('dashboard.edit');
    Route::put('dashboard/update/{homePost}', 'update')->name('dashboard.update');
    Route::delete('/dashboard/{homePost}', 'destroy')->name('dashboard.destroy');
});

// ADMIN SERVICES
Route::controller(\App\Http\Controllers\ServicesCategoryController::class)->middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
   Route::get('/category-services', 'index')->name('category');
    Route::post('/category-services', 'store')->name('category.store');
    Route::get('/category-services/edit/{category}', 'edit')->name('category.edit');
    Route::put('/category-services/update/{category}', 'update')->name('category.update');
    Route::delete('/category-services/destroy/{category}', 'destroy')->name('category.destroy');
});

Route::controller(\App\Http\Controllers\ServicesPostController::class)->middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/services/{category}', 'index')->name('services');
    Route::post('/services/create', 'store')->name('services.create');
    Route::get('services/edit/{category}', 'edit')->name('services.edit');
    Route::put('services/update/{category}', 'update')->name('services.update');
    Route::delete('services/destroy/{category}', 'destroy')->name('services.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
