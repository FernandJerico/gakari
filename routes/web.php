<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/eksplorasi', function () {
    return view('pages.exploration');
})->name('eksplorasi');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('user.')->prefix('user')->group(function () {
    Route::middleware(['isLogin'])->group(function () {
        Route::get('/', [App\Http\Controllers\User\ArtworkController::class, 'index'])->name('index');
    });
});
