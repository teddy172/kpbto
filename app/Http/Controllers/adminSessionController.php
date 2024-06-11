<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\admin;

class adminSessionController extends Controller
{
    public function index(){
        return view('admin/adminLogin');
    }

    public function login(Request $request){
        Session::flash('admin_NIP', $request->admin_NIP);

        $request->validate([
            'admin_NIP'=>'required',
            'admin_password'=>'required'
        ],[
            'admin_NIP.required'=>'NIP harus diisi',
            'admin_password.required'=>'password harus diisi' 
        ]);

        $login = [
            'admin_NIP'=> $request->input('NIP'),
            'admin_password'=> $request->input('password')
        ];

        $profil = admin::where('admin_NIP', $login['admin_NIP'])->first();
        
   
        if(Auth::attempt($login)){
            Session::put('profilAdmin', $profil);
            return redirect('/admin');
        }else{
            return redirect('/admin/login')->withErrors('NIP atau password salah');
        };
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin/login')->with('berhasil logout');
    }
}
