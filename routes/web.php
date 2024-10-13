<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserHomeController;

Route::get('/', function () {
    return view('welcome');
});


// auth
Route::get("login",[AuthController::class, "loginPage"])->name("Auth#loginPage")->middleware("guest");
Route::post("login",[AuthController::class, "login"])->name("Auth#login");

Route::get("register",[AuthController::class, "registerPage"])->name("Auth#registerPage")->middleware("guest");
Route::post("register",[AuthController::class, "register"])->name("Auth#register");

Route::get("logout",[AuthController::class, "logout"])->name("Auth#logout");

Route::get("test",[AuthController::class, "test"])->name("Auth#test");


// home
Route::get("home",[UserHomeController::class,"index"])->name("UserHome#index")->middleware("user");
Route::get("about",[UserHomeController::class,"about"])->name("UserHome#about")->middleware("user");

// userList
Route::get("users/list",[UserHomeController::class, "list"])->name("UserHome#list");
