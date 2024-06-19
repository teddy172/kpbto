<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class adminProfilController extends Controller
{
    public function create(){
        $admin = admin::all();
        return view('admin/adminRegis')->with('admin',  $admin);
    }

    public function store(Request $request){
        Session::flash('admin_name', $request->admin_name);
        Session::flash('admin_email', $request->admin_email);
        Session::flash('password', $request->password);
        Session::flash('admin_NIP', $request->admin_NIP);
        Session::flash('nomer_telepon_admin', $request->nomer_telepon_admin);

        $request->validate([
            'admin_name' => 'required',
            'admin_email' => 'required|email|unique:admin,admin_email',
            'password' => 'required',
            'admin_NIP' => 'required',
            'nomer_telepon_admin' => 'required',
        ],[
            'admin_name.required' => 'nama harus di isi !',
            'admin_email.required' => 'email harus di isi !',
            'admin_email.email' => 'harus menggunakan format name@domain.com !',
            'admin_email.unique' => 'sudah ada email dengah nama sama !',
            'password.required' => 'password harus di isi !',
            'admin_NIP.required' => 'NIP harus di isi !',
            'nomer_telepon_admin.required' => 'nomer telepon harus di isi !',
        ]);
        $enkripsi = bcrypt($request->input('password'));

        $data = [
            'admin_name' => $request->input('admin_name'),
            'admin_email' => $request->input('admin_email'),
            'password' => $enkripsi,
            'admin_NIP' => $request->input('admin_NIP'),
            'nomer_telepon_admin' => $request->input('nomer_telepon_admin'),
        ];
        admin::create($data);
        return redirect('/admin/login')->with("pesan", "berhasil mendaftar");
    }


    public function edit(string $id){
        $admin = admin::where('id', $id)->first();
        return view('admin/adminAccount')->with('pass', $admin);
    }

    public function update(Request $request, string $id){
        if ($request->has('password_lama') && $request->has('password_baru')) {
            $request->validate([
                'password_lama' => 'required',
                'password_baru' => 'required',
            ]);

            if(!Hash::check($request->password_lama, auth('admin')->user()->password)){
                return back()->with("error", "password lama tidak sesuai !");
            }

            admin::whereId(auth('admin')->user()->id)->update([
                'password' => Hash::make($request->password_baru)
            ]);

            return back()->with("status", "password berhasil dirubah!");

        }else{
            $request->validate([
                'admin_name' => 'required|string|max:255',
                'nomer_telepon_admin' => 'required|string|max:15',
                'admin_NIP' => 'required|string|max:20',
                'admin_email' => 'required|email|max:255',
            ]);

            $data = [
                'admin_name' => $request->input('admin_name'),
                'nomer_telepon_admin' => $request->input('nomer_telepon_admin'),
                'admin_NIP' => $request->input('admin_NIP'),
                'admin_email' => $request->input('admin_email'),
            ];

            admin::where('id', $id)->update($data);
            return back()->with("status", "Profil berhasil diperbarui!");
        }
    }
}
