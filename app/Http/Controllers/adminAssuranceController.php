<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\{
    assurance,
    User,
    };
use Illuminate\Support\Facades\DB;

class adminAssuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assurance = assurance::leftJoin('users', 'users.id', '=', 'assurance.teknisi_id')
                     ->select('assurance.id as id_assurance', 'assurance.status', 'assurance.nama_pelanggan', 'users.id as idUser', 
                        'users.name as teknisi_name', 'assurance.no_incident')
                     ->orderBY('assurance.id', 'asc')->paginate(10);//membatasi data yang diambil dengan paginate
        return view ('admin/adminAssurance')->with('data', $assurance);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teknisi = User::all();
        return view ('admin/adminAssuranceTambah')->with('teknisi', $teknisi);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_pelanggan', $request->nama_pelanggan);
        Session::flash('alamat', $request->alamat);
        Session::flash('no_telepon', $request->no_telepon);
        Session::flash('no_internet', $request->no_internet);
        Session::flash('no_incident', $request->no_incident);
        Session::flash('keluhan', $request->keluhan);
        Session::flash('status', $request->status);

        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'no_internet' => 'required',
            'no_incident' => 'required',
            'keluhan' => 'required',
            'status' => 'required',
            'teknisi_id' => 'required',
        ],[
            'nama_pelanggan' => 'nama pelanggan tidak boleh kosong !',
            'alamat' => 'alamat pelanggan tidak boleh kosong !',
            'no_telepon' => 'nomer telepon pelanggan tidak boleh kosong !',
            'no_internet' => 'nomer internet tidak boleh kosong !',
            'no_incident' => 'nomer incident tidak boleh kosong !',
            'keluhan' => 'kolom keluhan harus di isi !',
            'status' => 'status harus di isi !',
            'teknisi_id' => 'nama teknisi yang bertugas harus di isi !',
        ]);
        $data = [
            'nama_pelanggan' => $request->input('nama_pelanggan'),
            'alamat' => $request->input('alamat'),
            'no_telepon' => $request->input('no_telepon'),
            'no_internet' => $request->input('no_internet'),
            'no_incident' => $request->input('no_incident'),
            'keluhan' => $request->input('keluhan'),
            'status' => $request->input('status'),
            'teknisi_id' => $request->input('teknisi_id'),
        ];
        assurance::create($data);
        return redirect('/adminAssurance')->with("pesan", "berhasil menambahkan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = assurance::where('id', $id)->first();
        return view('admin/adminAssuranceDetail')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teknisi = User::all();
        $join = assurance::leftJoin('users', 'users.id', '=', 'assurance.teknisi_id')
                ->select('assurance.id as id_assurance', 'assurance.teknisi_id as idTeknisi', 'users.name as teknisi_name', 'users.id as idUser')
                ->where('assurance.id', $id)->first();
        $data = assurance::where('id', $id)->first();
        return view('admin/adminAssuranceEdit', ['data' => $data, 'teknisi' => $teknisi, 'join' => $join]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $status = $request->input('status');
        if ($status === 'null') {
            $status = null;
        }    

        $data = [
            'nama_pelanggan' => $request->input('nama_pelanggan'),
            'alamat' => $request->input('alamat'),
            'no_telepon' => $request->input('no_telepon'),
            'no_internet' => $request->input('no_internet'),
            'no_incident' => $request->input('no_incident'),
            'keluhan' => $request->input('keluhan'),
            'status' => $status,
            'teknisi_id' => $request->input('teknisi_id'),
        ];
        assurance::where('id', $id)->update($data);
        return redirect('/adminAssurance')->with("pesan", "berhasil merubah!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        assurance::where('id', $id)->delete();
        return redirect('/adminAssurance')->with("pesan", "berhasil menghapus!");
    }

    public function CARI(Request $request)
    {
        $cari = $request->input('assuranceCari');
        $assurance = assurance::leftJoin('users', 'users.id', '=', 'assurance.teknisi_id')
                    ->select('assurance.id as id_assurance', 'assurance.status', 'assurance.nama_pelanggan', 'users.id as idUser', 
                      'users.name as teknisi_name', 'assurance.no_incident')
                    ->where('name', 'like', "%".$cari."%")->orwhere('alamat', 'like', "%".$cari."%")
                    ->orwhere('no_incident', 'like', "%".$cari."%")->orwhere('status', 'like', "%".$cari."%")
                    ->paginate(10);
        return view('admin/adminAssurance')->with('data', $assurance);
    }
}
