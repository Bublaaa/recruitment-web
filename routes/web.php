<?php

use Illuminate\Support\Facades\Route;

// Redirect based on user role
Route::middleware(['auth'])->group(function () {
    $user = auth()->user();
    if($user->role == "admin"){
        return redirect('/admin');
    }
    elseif($user->role == "peserta") {
        return redirect('/client');
    }
    else{
        return redirect('/');
    }
});

Route::get('/admin', function () {
    return view('/layouts/adminPage');
});

Route::get('/client', function () {
    return view('/layouts/clientPage');
});

// Route::get('/', function () {
//     return view('/layouts/landingPage');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');