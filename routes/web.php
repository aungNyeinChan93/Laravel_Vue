<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserHomeController;

Route::get('/', function () {
    return view('welcome');
});


// auth
Route::get("login",[AuthController::class, "login"])->name("Auth#login");
Route::get("register",[AuthController::class, "registerPage"])->name("Auth#registerPage");
Route::post("register",[AuthController::class, "register"])->name("Auth#register");
Route::get("test",[AuthController::class, "test"])->name("Auth#test");


// home
Route::get("home",[UserHomeController::class,"index"])->name("UserHome#index");
Route::get("about",[UserHomeController::class,"about"])->name("UserHome#about");
