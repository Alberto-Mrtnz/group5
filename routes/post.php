<?php

use App\Http\Controllers\UserController;
use App\Models\Rating;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class,'create']);
Route::post('logout', [UserController::class,'logout']);

Route::post('review', function (Request $request) {
    $request->validate([
        'comment' => 'required',
        'supply_id' => 'required',
        'stars' => 'required'
    ]);

    $data['comment'] = $request->comment;
    $data['stars'] = $request->stars;
    $data['supply_id'] = $request->supply_id;
    $data['user_id'] = Auth::user()->id;

    if(Rating::create($data)) {
        return redirect()->back();
    }

    return redirect()->back()->withErrors();

})->name('review.create');
