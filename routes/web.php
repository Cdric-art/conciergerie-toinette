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

// CONCIERGERIE AIRBNB
Route::controller(\App\Http\Controllers\ConciergerieAirbnbController::class)->group(function () {
    Route::get('conciergerie-airbnb', 'index')->name('conciergerie_airbnb');
    Route::get('conciergerie-airbnb/{post}', 'show')->name('conciergerie_airbnb.post');
});

// A PROPOS
Route::get('/a-propos', function() {
    return view('a-propos.a-propos');
})->name('a-propos'); 

// MENTIONS LEGALES
Route::get('/mentions-legales', function() {
    return view('mentions-legales.mentions-legales');
})->name('mentions-legales'); 

// ADMIN - HOME
Route::controller(\App\Http\Controllers\Admin\HomePostController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::post('/dashboard', 'store')->name('dashboard.store');
    Route::get('dashboard/edit/{homePost}', 'edit')->name('dashboard.edit');
    Route::put('dashboard/update/{homePost}', 'update')->name('dashboard.update');
    Route::delete('/dashboard/{homePost}', 'destroy')->name('dashboard.destroy');
});

// ADMIN - SERVICES AU QUOTIDIEN
Route::controller(\App\Http\Controllers\Admin\ServicesCategoryController::class)->middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/category-services', 'index')->name('category');
    Route::post('/category-services', 'store')->name('category.store');
    Route::get('/category-services/edit/{category}', 'edit')->name('category.edit');
    Route::put('/category-services/update/{category}', 'update')->name('category.update');
    Route::delete('/category-services/destroy/{category}', 'destroy')->name('category.destroy');
});

Route::controller(\App\Http\Controllers\Admin\ServicesPostController::class)->middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/services/{category}', 'index')->name('services');
    Route::post('/services/create', 'store')->name('services.store');
    Route::get('services/edit/{service}', 'edit')->name('services.edit');
    Route::put('services/update/{service}', 'update')->name('services.update');
    Route::delete('services/destroy/{service}', 'destroy')->name('services.destroy');
});

// ADMIN - CONCIERGERIE AIRBNB
Route::controller(\App\Http\Controllers\Admin\PostConciergerieAirbnbController::class)->middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/conciergerie', 'index')->name('conciergerie');
    Route::post('/conciergerie', 'store')->name('conciergerie.store');
    Route::get('/conciergerie/edit/{post}', 'edit')->name('conciergerie.edit');
    Route::put('/conciergerie/update/{post}', 'update')->name('conciergerie.update');
    Route::delete('/conciergerie/destroy/{post}', 'destroy')->name('conciergerie.destroy');

});

// AUTH
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
