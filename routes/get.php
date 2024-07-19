<?php

use App\Models\Category;
use App\Models\Supply;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::get('/register', function () {
    return view('users.register');
})->name('register');

Route::get('/form', function () {
    return view('form');
})->name('formServices');

Route::get('/home', function () {
    return view('home', [
        'supplies' => Supply::with('category')->orderByDesc('id')->get(),
        'categories' => Category::all()
    ]);
});


Route::get('/service/{service}', function (Supply $service) {
    return view('service', [
        'supply' => $service->load('user'),
    ]);
});

Route::get('/userprofile', function () {
    return view('userprofile', [
        'user' => Auth::user()
    ]);
})->name('userprofile');

Route::get('/providerprofile', function () {
    return view('providerprofile',[
        'user'=> Auth::user()
    ]);
})->name('providerprofile');

Route::get('/prueva', function () {
    return view('prueva');
});
