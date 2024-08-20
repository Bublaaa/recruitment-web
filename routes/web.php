<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Redirect based on user role
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('layouts.adminPage');
    });
    Route::resource('user', UserController::class);
});

Route::middleware(['auth'])->prefix('client')->group(function () {
    Route::get('/', function () {
        return view('layouts.clientPage');
    });
});

Auth::routes();

// Default route or landing page
Route::get('/', function () {
    return view('layouts.landingPage');
});