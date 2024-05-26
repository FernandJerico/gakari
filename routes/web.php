<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing');
})->name('landing');

Route::resource('eksplorasi', App\Http\Controllers\ExplorationController::class)->except('create', 'edit', 'update', 'destroy');
Route::post('eksplorasi/like/{id}', [App\Http\Controllers\ExplorationController::class, 'like'])->name('eksplorasi.like');
Route::post('eksplorasi/comment/{id}', [App\Http\Controllers\ExplorationController::class, 'comment'])->name('eksplorasi.comment');

Auth::routes();

Route::middleware(['isLogin'])->group(function () {
    Route::resource('profile', App\Http\Controllers\User\ArtworkController::class)->except('create', 'show', 'edit', 'update');
    Route::get('user/edit-profile', [App\Http\Controllers\User\UserController::class, 'index'])->name('edit.profile');
    Route::put('user/update', [App\Http\Controllers\User\UserController::class, 'update'])->name('update.profile');
});
