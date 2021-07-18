<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){

        $dataLogins = Home::get();
        return view('login', compact('dataLogins'));
    }
//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }
}
