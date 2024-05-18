<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\odc; //data diambil dari database melalui model
use App\Models\odp;
use Illuminate\Support\Facades\DB;

class odcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//function table odc
    {
        $odc = odc::orderBY('odc_id', 'asc')->paginate(10); //membatasi data yang diambil dengan paginate
        return view ('odc')->with('data', $odc); //mengembalikan tampilan ke odc bersama variabel data
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view ('odcTambah');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_odc', $request->nama_odc);
        Session::flash('lokasi', $request->lokasi);
        Session::flash('kordinat', $request->kordinat);
        Session::flash('slot', $request->slot);
        Session::flash('sisa_slot', $request->sisa_slot);
        Session::flash('port', $request->port);
        Session::flash('sisa_port', $request->sisa_port);
        Session::flash('status', $request->status);
        
        $request->validate([
            'nama_odc'=>'required',
            'lokasi' => 'required',
            'kordinat' => 'required',
            'slot' => 'required',
            'sisa_slot' => 'required',
            'port' => 'required',
            'sisa_port' => 'required',
            'status' => 'required',
        ],[
            'nama_odc.required'=>'ID ODC tidak boleh kosong',
            'lokasi.required'=>'Lokasi tidak boleh kosong',
            'kordinat.required'=>'Kordinat tidak boleh kosong',
            'slot.required'=>'Slot tidak boleh kosong',
            'sisa_slot.required'=>'Sisa slot tidak boleh kosong',
            'port.required'=>'Port tidak boleh kosong',
            'sisa_port.required'=>'Sisa port tidak boleh kosong',
            'status.required'=>'Status tidak boleh kosong',
        ]);
        $data = [
            'nama_odc' => $request->input('nama_odc'),
            'lokasi' => $request->input('lokasi'),
            'kordinat' => $request->input('kordinat'),
            'slot' => $request->input('slot'),
            'sisa_slot' => $request->input('sisa_slot'),
            'port' => $request->input('port'),
            'sisa_port' => $request->input('sisa_port'),
            'status' => $request->input('status'),
        ];
        odc::create($data);
        // return redirect('odc')->with(['success' => 'Data Berhasil Disimpan!']);;
        return redirect('/odc');
    }

    /**
     * Display the specified resource.
     */
    public function show($odc_id)
    {
        $data = DB::table('odc')
                ->leftJoin('odp', 'odc.odc_id', '=', 'odp.odc_id')
                ->orderBy('odc.odc_id')
                ->where('odc.odc_id', $odc_id)
                ->select('odc.odc_id as dc_id', 'odc.nama_odc', 'odc.lokasi as lokasi_odc', 'odc.kordinat as kordinat_odc', 'odc.slot as slot_odc', 
                         'odc.sisa_slot as sisa_slot_odc', 'odc.port as port_odc', 'odc.sisa_port as sisa_port_odc', 'odc.status as status_odc', 
                         'odp.odp_id as dp_id', 'odp.nama_odp', 'odp.odc_id as foreign', 'odp.lokasi as lokasi_odp', 'odp.kordinat as kordinat_odp', 
                         'odp.port as port_odp', 'odp.sisa_port as sisa_port_odp', 
                         'odp.status as status_odp', 'odp.distribusi as distribusi_odp')
                ->paginate(15);
        $odc = odc::where('odc_id', $odc_id)->first();
        return view('odcDetail', ['data' => $data, 'odc' => $odc]);
        // return "<h1>nama odc dengan id $odc_id</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $odc = odc::where('odc_id', $id)->first();
        return view('odcEdit')->with('data', $odc);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_odc'=>'required',
            'lokasi' => 'required',
            'kordinat' => 'required',
            'slot' => 'required',
            'sisa_slot' => 'required',
            'port' => 'required',
            'sisa_port' => 'required',
            'status' => 'required',
        ],[
            'nama_odc.required'=>'ID ODC tidak boleh kosong',
            'lokasi.required'=>'Lokasi tidak boleh kosong',
            'kordinat.required'=>'Kordinat tidak boleh kosong',
            'slot.required'=>'Slot tidak boleh kosong',
            'sisa_slot.required'=>'Sisa slot tidak boleh kosong',
            'port.required'=>'Port tidak boleh kosong',
            'sisa_port.required'=>'Sisa port tidak boleh kosong',
            'status.required'=>'Status tidak boleh kosong',
        ]);
        $data = [
            'nama_odc' => $request->input('nama_odc'),
            'lokasi' => $request->input('lokasi'),
            'kordinat' => $request->input('kordinat'),
            'slot' => $request->input('slot'),
            'sisa_slot' => $request->input('sisa_slot'),
            'port' => $request->input('port'),
            'sisa_port' => $request->input('sisa_port'),
            'status' => $request->input('status'),
        ];
        odc::where('odc_id', $id)->update($data);
        return redirect('/odc');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        odc::where('odc_id', $id)->delete();
        return redirect('/odc');
    }
    /**
     * mencari data terkait melalui fitur search.
     */
    public function CARI(Request $request)
    {
        $cari = $request->Cari;
        $odc = odc::where('nama_odc', 'like', "%".$cari."%")->orwhere('lokasi', 'like', "%".$cari."%")
                ->paginate(10);
        return view('odc')->with('data', $odc);
    }
}
