<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    // Index
    public function index(){

        return inertia("user/Home",["name"=>"home"]);
    }

    // about page
    public function about(){
        return Inertia::render("user/About",["name"=>"about"]);
    }
}
