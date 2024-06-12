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
        Session::flash('admin_NIP', $request->input('NIPadmin'));

        $request->validate([
            'NIPadmin'=>'required',
            'passwordadmin'=>'required'
        ],[
            'NIPadmin.required'=>'NIP harus diisi',
            'passwordadmin.required'=>'password harus diisi' 
        ]);

        $login = [
            'admin_NIP'=> $request->input('NIPadmin'),
            'password'=> $request->input('passwordadmin')
        ];

        $profil = admin::where('admin_NIP', $login['admin_NIP'])->first();
        
   
        if (Auth::guard('admin')->attempt($login)) {
            Session::put('profilAdmin', $profil);
            return redirect('/admin');
        }else{
            return redirect('/admin/login')->withErrors('NIP atau password salah');
        };
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin/login')->with('status', 'berhasil logout');
    }
}
