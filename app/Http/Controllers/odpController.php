<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\odp; //data diambil dari database melalui model
use App\Models\odc;
use Illuminate\Support\Facades\DB;

class odpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $odp = odp::orderBY('odp_id', 'asc')->paginate(10); //membatasi data yang diambil dengan paginate
        return view ('odp')->with('data', $odp); //mengembalikan tampilan ke odc bersama variabel data
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $namaOdc = odc::all();
        return view ('odpTambah')->with('namaOdc', $namaOdc);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_odp', $request->nama_odp);
        Session::flash('odc_id', $request->odc_id);
        Session::flash('lokasi', $request->lokasi);
        Session::flash('kordinat', $request->kordinat);
        Session::flash('port', $request->port);
        Session::flash('sisa_port', $request->sisa_port);
        Session::flash('status', $request->status);
        Session::flash('distribusi', $request->distribusi);
        
        $request->validate([
            'nama_odp'=>'required',
            'odc_id' => 'required',
            'lokasi' => 'required',
            'kordinat' => 'required',
            'port' => 'required',
            'sisa_port' => 'required',
            'status' => 'required',
            'distribusi' => 'required',
        ],[
            'nama_odp.required'=>'ID ODP tidak boleh kosong',
            'odc_id.required'=>'ID ODC tidak boleh kosong',
            'lokasi.required'=>'Lokasi tidak boleh kosong',
            'kordinat.required'=>'Kordinat tidak boleh kosong',
            'port.required'=>'Port tidak boleh kosong',
            'sisa_port.required'=>'Sisa port tidak boleh kosong',
            'status.required'=>'Status tidak boleh kosong',
            'distribusi.required' => 'distribusi tidak boleh kosong'
        ]);
        $data = [
            'nama_odp' => $request->input('nama_odp'),
            'odc_id' => $request->input('odc_id'),
            'lokasi' => $request->input('lokasi'),
            'kordinat' => $request->input('kordinat'),
            'port' => $request->input('port'),
            'sisa_port' => $request->input('sisa_port'),
            'status' => $request->input('status'),
            'distribusi' => $request->input('distribusi'),
        ];
        odp::create($data);
        // return redirect('odc')->with(['success' => 'Data Berhasil Disimpan!']);;
        return redirect('/odp');
    }

    /**
     * Display the specified resource.
     */
    public function show($odp_id)
    {
        $odp = odp::where('odp_id', $odp_id)->first();
        return view('odpDetail')->with('odp', $odp);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $odp = odp::where('odp_id', $id)->first();
        return view('odpEdit')->with('data', $odp);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama_odp' => $request->input('nama_odp'),
            'lokasi' => $request->input('lokasi'),
            'kordinat' => $request->input('kordinat'),
            'port' => $request->input('port'),
            'sisa_port' => $request->input('sisa_port'),
            'status' => $request->input('status'),
        ];
        odp::where('odp_id', $id)->update($data);
        return redirect('/odp');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function CARI(Request $request)
    {
        $cari = $request->Cari;
        $odp = odp::where('nama_odp', 'like', "%".$cari."%")->orwhere('lokasi', 'like', "%".$cari."%")
                ->paginate(10);
        return view('odp')->with('data', $odp);
    }
}
