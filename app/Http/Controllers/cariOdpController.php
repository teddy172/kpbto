<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\odp;
use App\Models\odc;
use Illuminate\Support\Facades\Session;

class cariOdpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cariodp');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = odc::all();
        return view('tambahodp')->with('dataODC', $data);
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
        Session::flash('port_terpakai', $request->port_terpakai);
        Session::flash('sisa_port', $request->sisa_port);
        Session::flash('port', $request->port);
        Session::flash('distribusi', $request->distribusi);

        $request->validate([
            'nama_odp'=>'required',
            'odc_id' => 'required',
            'lokasi' => 'required',
            'kordinat' => 'required',
            'port_terpakai' => 'required',
            'sisa_port' => 'required',
            'port' => 'required',
            'distribusi' => 'required',
        ],[
            'nama_odp.required'=>'ID ODC tidak boleh kosong',
            'odc_id.required'=>'ID ODC tidak boleh kosong',
            'lokasi.required'=>'Lokasi tidak boleh kosong',
            'kordinat.required'=>'Kordinat tidak boleh kosong',
            'port_terpakai' => 'port terpakai tidak boleh kosong',
            'sisa_port.required'=>'Sisa port tidak boleh kosong',
            'port.required'=>'Port tidak boleh kosong',
            'distribusi.required' => 'distribusi tidak boleh kosong'
        ]);
        $data = [
            'nama_odp' => strtoupper($request->input('nama_odp')),
            'odc_id' => $request->input('odc_id'),
            'lokasi' => $request->input('lokasi'),
            'kordinat' => $request->input('kordinat'),
            'port_terpakai' => $request->input('port_terpakai'),
            'sisa_port' => $request->input('sisa_port'),
            'port' => $request->input('port'),
            'distribusi' => $request->input('distribusi'),
        ];
        odp::create($data);
        // return redirect('odc')->with(['success' => 'Data Berhasil Disimpan!']);;
        return redirect('/ODP')->with("status", "berhasil menambahkan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request){
        $cari = $request->input('search');
        $odp = odp::where('nama_odp', 'like', "%".$cari."%")->orwhere('lokasi', 'like', "%".$cari."%")
        ->first();
        return view('cariodp')->with('data', $odp);
    }
}
