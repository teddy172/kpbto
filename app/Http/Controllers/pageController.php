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
    function login(){
        return view("login");
    }
    function odp(){
        return view("odp");
    }
    function odc(){
        return view("odc");
    }
    public function search()
    {
        $odc = odc::latest();
        if(request('cari')){
            $odc->where('nama_odc','lokasi', '%' .request('cari'). '%');
        };
        return redirect('/odc')->with('data', $odc);;
    }

        
}
