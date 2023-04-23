<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class AuroraController extends Controller
{

    public function index(){
        return view('aurora.welcome');
    }

    public function register(){
        return view('aurora.register');
    }

    public function Login(){
        return view('aurora.login');
    }
}
