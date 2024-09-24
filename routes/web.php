<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('lwl-welcome');
});

Route::get('users',[UserController::class,'index']); // call index function of UC when this slug hits
