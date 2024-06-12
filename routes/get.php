<?php

use App\Models\Category;
use App\Models\Supply;
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
    return view('home', [
        'supplies' => Supply::with('category')->orderByDesc('id')->get(),
        'categories' => Category::all()
    ]);
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/service', function () {
    return view('service');
});

