<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('/layouts/adminPage');
});

Route::get('/', function () {
    return view('/layouts/landingPage');
});