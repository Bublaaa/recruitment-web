<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;


// Redirect based on user role
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('layouts.adminPage');
    });
    Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('admin.showDashboard');
    Route::get('/user/register', [AdminController::class, 'showAdminRegistrationForm'])->name('admin.showregister');
    Route::post('/register', [AdminController::class, 'register'])->name('admin.register');
    Route::resource('user', UserController::class);
});

Route::middleware(['auth'])->prefix('client')->group(function () {
    Route::get('/', function () {
        return view('layouts.clientPage');
    });
    Route::get('/personalData', [ClientController::class, 'showPersonalData'])->name('showPersonalData');
});

Auth::routes();

// Default route or landing page
Route::get('/', function () {
    return view('layouts.landingPage');
});