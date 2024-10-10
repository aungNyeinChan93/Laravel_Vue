<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    // login
    public function login(){
        // sleep(2);
        return Inertia::render("auth/login",["title"=>"Login"]);
    }

    public function register(){
        return inertia("auth/register",["title"=>"register"]);
    }

    // testing area
    public function test(){
        $data = [
            "name"=>"aung",
            "age"=>20,
            "gender"=>"male"
        ];
        return inertia("auth/test",["title"=>"test","data"=>$data]);
    }

}
