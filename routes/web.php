<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('lwl-welcome');
});

Route::get('users', [UserController::class, 'index']); // call index function of UC when this slug hits
Route::post('users/store', [UserController::class, 'store'])->name('user.store'); // save data from the form
Route::get('display',[UserController::class,'display']);
