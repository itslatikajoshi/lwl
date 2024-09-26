<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signup-form');
});

Route::get('users', [UserController::class, 'index']); // call index function of UC when this slug hits
Route::post('users/store', [UserController::class, 'store'])->name('user.store'); // save data from the form
Route::get('display', [UserController::class, 'display'])->name('data.display');
// This will get data which is already saved
Route::get('data/{id}/edit', [UserController::class, 'edit'])->name('data.edit');
// This will save new and updated data
Route::put('data/{id}', [UserController::class, 'update'])->name('data.update');
