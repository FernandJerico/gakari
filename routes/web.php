<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/eksplorasi', function () {
    return view('pages.exploration');
})->name('eksplorasi');

Route::get('/detail-eksplorasi', function () {
    return view('pages.detail-exploration');
})->name('detail.eksplorasi');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');