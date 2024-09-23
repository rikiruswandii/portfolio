<?php

use App\Http\Controllers\Settings;
use App\Http\Controllers\Panel\Dashboard;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->prefix('panel')->group(function () {
    Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('settings')->group(function () {
        Route::get('/', [Settings::class, 'index'])->name('setting.create');
        Route::post('/update', [Settings::class, 'update'])->name('setting.update');
    });
});

require __DIR__.'/auth.php';