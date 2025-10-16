<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/confirm', function () {
    return view('confirm');
});

Route::get('/login', function () {
    return view('login');
});
