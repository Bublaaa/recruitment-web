<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('/layouts/dashboard');
});

Route::get('/peserta', function () {
    return view('/layouts/dashboard');
});

Route::get('/', function () {
    return view('/layouts/landingPage');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
