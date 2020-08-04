<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('register');
    }

    public function welcome(){
        return view('welcome');
    }

    public function create(Request $req){
        // no logic here lol
        print_r($req->input());
    }
}
