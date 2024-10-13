<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    // login
    public function loginPage(){
        // sleep(2);
        return Inertia::render("auth/Login",["title"=>"Login"]);
    }

    // user Login
    public function login(Request $request){
        $validate = $request->validate([
            "email"=>"required",
            "password"=>"required",
        ]);

        if(Auth::attempt($validate)){
            request()->session()->regenerate();
        }else{
            return back();
        }
        return to_route("UserHome#index");
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
        // dd($request->avator);

        $request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "password"=>"required",
            "password_confirmation"=>"required|same:password",
            "avator"=>"nullable|max:300|file"
        ]);
        if($request->hasFile("avator")){
            $avator = Storage::disk("public")->put("storage",$request->avator);
        }


        $user = User::create([
            "name"=> $request->name,
            "email" => $request->email,
            "password" =>Hash::make($request->password),
            "avator" =>$avator
        ]);

        Auth::login($user);
        return to_route("UserHome#index");
    }

    public function logout(){
        request()->session()->regenerate();
        Auth::logout();
        return to_route("Auth#register");
    }
}
