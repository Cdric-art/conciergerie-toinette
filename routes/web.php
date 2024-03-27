<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('home');

Route::get('/services', function () {
    return view('services.services');
})->name('services');


// ADMIN
Route::controller(\App\Http\Controllers\HomePostController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::post('/dashboard', 'store')->name('dashboard.store');
    Route::get('dashboard/edit/{homePost}', 'edit')->name('dashboard.edit');
    Route::put('dashboard/update/{homePost}', 'update')->name('dashboard.update');
    Route::delete('/dashboard/{homePost}', 'destroy')->name('dashboard.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
