<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\odc;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class cariOdcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cariodc');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahodc');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_odc', $request->nama_odc);
        Session::flash('lokasi', $request->lokasi);
        Session::flash('kordinat', $request->kordinat);
        Session::flash('port_terpakai', $request->port_terpakai);
        Session::flash('sisa_port', $request->sisa_port);
        Session::flash('port', $request->port);
        Session::flash('slot_terpakai', $request->slot_terpakai);
        Session::flash('sisa_slot', $request->sisa_slot);
        Session::flash('slot', $request->slot);

        $request->validate([
            'nama_odc'=>'required',
            'lokasi' => 'required',
            'kordinat' => 'required',
            'port_terpakai' => 'required',
            'sisa_port' => 'required',
            'port' => 'required',
            'slot_terpakai' => 'required',
            'sisa_slot' => 'required',
            'slot' => 'required',
        ],[
            'nama_odc.required'=>'ID ODC tidak boleh kosong',
            'lokasi.required'=>'Lokasi tidak boleh kosong',
            'kordinat.required'=>'Kordinat tidak boleh kosong',
            'port_terpakai' => 'port terpakai tidak boleh kosong',
            'sisa_port.required'=>'Sisa port tidak boleh kosong',
            'port.required'=>'Port tidak boleh kosong',
            'slot_terpakai' => 'slot terpakai tidak boleh kosong',
            'sisa_slot.required'=>'Sisa slot tidak boleh kosong',
            'slot.required'=>'Slot tidak boleh kosong',
        ]);
        $data = [
            'nama_odc' => strtoupper($request->input('nama_odc')),
            'lokasi' => $request->input('lokasi'),
            'kordinat' => $request->input('kordinat'),
            'port_terpakai' => $request->input('port_terpakai'),
            'sisa_port' => $request->input('sisa_port'),
            'port' => $request->input('port'),
            'slot_terpakai' => $request->input('slot_terpakai'),
            'sisa_slot' => $request->input('sisa_slot'),
            'slot' => $request->input('slot'),
        ];
        odc::create($data);
        // return redirect('odc')->with(['success' => 'Data Berhasil Disimpan!']);;
        return redirect('/ODC')->with("status", "berhasil menambahkan!");
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
        $odc = odc::where('status', 'up')->where('nama_odc', 'like', "%".$cari."%")->orwhere('lokasi', 'like', "%".$cari."%")
                ->first();
        return view('cariodc')->with('data', $odc);
    }
}
