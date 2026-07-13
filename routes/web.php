<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/lead-management', function () {
    return view('leadmanagement');
});
