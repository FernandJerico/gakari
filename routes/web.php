<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing');
});

Route::resource('eksplorasi', App\Http\Controllers\ExplorationController::class);

Auth::routes();

Route::name('user.')->prefix('user')->group(function () {
    Route::middleware(['isLogin'])->group(function () {
        Route::get('/', [App\Http\Controllers\User\ArtworkController::class, 'index'])->name('index');
    });
});
