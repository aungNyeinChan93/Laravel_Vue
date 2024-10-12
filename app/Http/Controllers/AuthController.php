<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // login
    public function login(){
        // sleep(2);
        return Inertia::render("auth/Login",["title"=>"Login"]);
    }

    public function registerPage(){
        return inertia("auth/Register",["title"=>"register"]);
    }

    // testing area
    public function test(){
        $data = [
            "name"=>"aung",
            "age"=>20,
            "gender"=>"male"
        ];
        return inertia("auth/Test",["title"=>"test","data"=>$data]);
    }


    // user Register
    public function register(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:users,email,".Auth::user()->email,
            "password"=>"required",
            "password_confirmation"=>"required|same:password",
        ]);

        $user = User::create([
            "name"=> $request->name,
            "email" => $request->email,
            "password" =>Hash::make($request->password)
        ]);
        Auth::login($user);
        return to_route("UserHome#index");
    }
}
