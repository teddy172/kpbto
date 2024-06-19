<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Hash;

class profilController extends Controller
{
    public function edit(string $id){
        $user = User::where('id', $id)->first();
        return view('account')->with('pass', $user);
    }

    public function update(Request $request, string $id){
        if ($request->has('pass_lama') && $request->has('pass_baru')) {
            $request->validate([
                'pass_lama' => 'required',
                'pass_baru' => 'required',
            ]);

            if(!Hash::check($request->pass_lama, auth()->user()->password)){
                return back()->with("error", "password lama tidak sesuai !");
            }

            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->pass_baru)
            ]);

            return back()->with("status", "password berhasil dirubah!");

        }else{
            $request->validate([
                'name' => 'required|string|max:255',
                'nomer_telepon' => 'required|string|max:15',
                'NIP' => 'required|string|max:20',
                'email' => 'required|email|max:255',
            ]);

            $data = [
                'name' => $request->input('name'),
                'nomer_telepon' => $request->input('nomer_telepon'),
                'NIP' => $request->input('NIP'),
                'email' => $request->input('email'),
            ];

            User::where('id', $id)->update($data);
            return back()->with("status", "Profil berhasil diperbarui!");
        }
    }
}
