<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing');
});

Route::resource('eksplorasi', App\Http\Controllers\ExplorationController::class);
Route::post('eksplorasi/like/{id}', [App\Http\Controllers\ExplorationController::class, 'like'])->name('eksplorasi.like');
Route::post('eksplorasi/comment/{id}', [App\Http\Controllers\ExplorationController::class, 'comment'])->name('eksplorasi.comment');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('user.')->prefix('user')->group(function () {
    Route::middleware(['isLogin'])->group(function () {
        Route::get('/', [App\Http\Controllers\User\ArtworkController::class, 'index'])->name('index');
    });
});
