<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    // Index
    public function index()
    {

        return inertia("user/Home", ["name" => "home"]);
    }

    // about page
    public function about()
    {
        return Inertia::render("user/About", props: ["name" => "about"]);
    }

    // users list
    public function list()
    {
        // $users = User::all(["name","email","created_at"]);
        $users = User::paginate(10);
        $test = "test";
        // dd($users);
        return inertia("user/UserList", ["users" => $users, $test]);
    }
}
