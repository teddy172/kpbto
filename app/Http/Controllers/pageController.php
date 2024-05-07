<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    function index(){
        return view("index");
    }
    function login(){
        return view("login");
    }
    function odp(){
        return view("odp");
    }
    function odc(){
        return view("odc");
    }

        
}
