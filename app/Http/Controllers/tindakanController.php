<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    assurance,
    tindakan,
};

class tindakanController extends Controller
{
    public function index(string $id){
        $data = tindakan::where('assurance_id', $id)->first();
        return view('tindakan')->with('data', $data);
    }

    public function create(Request $request, string $id){
        $request->validate([
            'kategori' => 'required',
            'sub_kategori' => 'required',
            'RCA' => 'required',
            'keterangan' => 'required',
        ],[
            'kategori.required' => 'kategori tidak boleh kosong!',
            'sub_kategori.required' => 'sub kategori tidak boleh kosong!',
            'RCA.required' => 'RCA tidak boleh kosong!',
            'keterangan.required' => 'keterangan tidak boleh kosong!'
        ]);

        $data = [
            'assurance_id' => $id,
            'kategori' => $request->input('kategori'),
            'sub_kategori' =>$request->input('sub kategori'),
            'RCA' =>$request->input('rca'),
            'keterangan' =>$request->input('keterangan'),
        ];
        tindakan::create($data);
        return redirect()->back()->with("status", "berhasil menambahkan!");
    }
}
