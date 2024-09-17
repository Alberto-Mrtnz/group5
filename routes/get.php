<?php

use App\Models\Budget;
use App\Models\Category;
use App\Models\Rating;
use App\Models\Supply;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::get('/register', function () {
    return view('users.register');
})->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/form', function () {
        return view('form');
    })->name('formServices');

    Route::get('/home', function () {
        return view('home', [
            'supplies' => Supply::with('category')->orderByDesc('id')->get(),
            'categories' => Category::all()
        ]);
    })->name('home');

    Route::get('/service/{service}', function (Supply $service) {
        return view('service', [
            'supply' => $service->load('user'),
            'ratings' => Rating::where('supply_id', $service->id)->with('user')->get(),
        ]);
    });

    Route::get('/provider/{user}', function (User $user) {
        return view('providerprofile',[
            'proveedor'=> $user,
        ]);
    })->name('provider');

    Route::get('/userprofile', function (Supply $service) {
        return view('userprofile', [
            'user' => Auth::user(),
            'supply' => $service->load('user'),
            'tableros' => Auth::user()->budgets->load('budgetItems', 'budgetItems.supply'),
        ]);
    })->name('profile');

    Route::get('/budgets/{budget}', function (Budget $budget) {
        return view('budgetDetails', [
            'tablero' => $budget->load('budgetItems', 'budgetItems.supply')
        ]);
    })->name('budgets.details');
});

Route::get('/prueva', function () {
    return view('prueva');
});
