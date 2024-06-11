<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/service', function () {
    return view('service');
});

