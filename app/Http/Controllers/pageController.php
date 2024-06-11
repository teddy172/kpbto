<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\odc; //data diambil dari database melalui model

class pageController extends Controller
{
    function index(){
        return view("index");
    }
   
    function adminIndex(){
        return view("admin/adminHome");
    }
}
