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
        $data = assurance::leftJoin('tindakan', 'assurance.id', '=', 'tindakan.assurance_id')
                ->find($id);
        return view('assurance3', ['data' => $data, 'idasurance' => $id]);
    }

    public function create(Request $request){
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
            'assurance_id' => $request->input('assurance_id'),
            'kategori' => $request->input('kategori'),
            'sub_kategori' =>$request->input('sub_kategori'),
            'RCA' =>$request->input('RCA'),
            'keterangan' =>$request->input('keterangan'),
        ];
        tindakan::create($data);
        // Mengubah status assurance menjadi closed
        $assurance = assurance::find($request->input('assurance_id'));;
        if ($assurance) {
            $assurance->status = 'closed';
            $assurance->save();
        }
        return redirect()->back()->with("status", "berhasil menambahkan!");
    }
}
