<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Hash;

class profilController extends Controller
{
    public function index($id){
        $user = User::where('id', $id)->first();
        return view('profilTeknisi')->with('profil', $user);
    }

    public function edit(string $id){
        $user = User::where('id', $id)->first();
        return view('editPassword')->with('pass', $user);
    }

    public function update(Request $request, string $id){
        $request->validate([
            'pass_lama' => 'required',
            'pass_baru' => 'required',
        ]);

        if(!Hash::check($request->pass_lama, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->pass_baru)
        ]);

        return back()->with("status", "password berhasil dirubah!");
    }
}
