<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/items', [ItemController::class, 'index']);

require __DIR__.'/settings.php';
