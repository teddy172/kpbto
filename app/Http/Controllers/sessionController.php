<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class sessionController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        Session::flash('NIP', $request->NIP);

        $request->validate([
            'NIP'=>'required',
            'password'=>'required'
        ],[
            'NIP.required'=>'NIP harus diisi',
            'password.required'=>'password harus diisi' 
        ]);

        $login = [
            'NIP'=> $request->NIP,
            'password'=> $request->password
        ];

        $profil = User::where('NIP', $login['NIP'])->first();
        
   
        if(Auth::attempt($login)){
            Session::put('profilTeknisi', $profil);
            return redirect('/');
        }else{
            return redirect('login')->withErrors('NIP atau password salah');
        };
    }

    public function logout(){
        Auth::logout();
        return redirect('login')->with('berhasil logout');
    }

}
