<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::get('/register', function () {
    return view('users.register');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/service', function () {
    return view('service');
});

