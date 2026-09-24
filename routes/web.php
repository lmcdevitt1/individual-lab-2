<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::controller(ItemController::class)->group(function () {
    Route::get('/', 'welcome')->name('home');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(ItemController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });
});

Route::get('/items', [ItemController::class, 'index']);

require __DIR__.'/settings.php';
