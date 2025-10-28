<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class)->except(['index', 'show']);
});

Route::resource('posts', PostController::class)->only(['index', 'show']);
