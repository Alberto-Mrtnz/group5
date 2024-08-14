<?php

use App\Models\Category;
use App\Models\Supply;
use App\Models\User;
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

Route::get('/userprofile', function (Supply $service) {
    return view('userprofile', [
        'user' => Auth::user(),
        'supply' => $service->load('user')
        
    ]);
});

Route::get('/provider/{user}', function (User $user) {
    return view('providerprofile',[
        'proveedor'=> $user
    ]);
})->name('provider');

Route::get('/prueva', function () {
    return view('prueva');
});
