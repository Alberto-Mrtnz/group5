<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class,'create']);
Route::post('logout', [UserController::class,'logout']);

