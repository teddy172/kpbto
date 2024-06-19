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
        return view ('admin/odc')->with('data', $odc); //mengembalikan tampilan ke odc bersama variabel data
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view ('admin/odcTambah');
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
        Session::flash('status', $request->status);

        $request->validate([
            'nama_odc'=>'required',
            'lokasi' => 'required',
            'kordinat' => 'required',
            'port_terpakai' => 'required|integer',
            'sisa_port' => 'required|integer',
            'port' => 'required|integer',
            'slot_terpakai' => 'required|integer',
            'sisa_slot' => 'required|integer',
            'slot' => 'required|integer',
            'status' => 'required',
        ],[
            'nama_odc.required'=>'ID ODC tidak boleh kosong',
            'lokasi.required'=>'Lokasi tidak boleh kosong',
            'kordinat.required'=>'Kordinat tidak boleh kosong',
            'port_terpakai.required' => 'port terpakai tidak boleh kosong',
            'sisa_port.required'=>'Sisa port tidak boleh kosong',
            'port.required'=>'Port tidak boleh kosong',
            'slot_terpakai.required' => 'slot terpakai tidak boleh kosong',
            'sisa_slot.required'=>'Sisa slot tidak boleh kosong',
            'slot.required'=>'Slot tidak boleh kosong',
            'status.required' => 'tidak boleh kosong',
            'slot_terpakai.integer' => 'Slot terpakai harus berupa angka!',
            'port_terpakai.integer' => 'Port terpakai harus berupa angka!',
            'slot.integer' => 'Slot harus berupa angka!',
            'sisa_slot.integer' => 'Sisa slot harus berupa angka!',
            'port.integer' => 'Port harus berupa angka!',
            'sisa_port.integer' => 'Sisa port harus berupa angka!',
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
            'status' => $request->input('status'),
        ];
        odc::create($data);
        // return redirect('odc')->with(['success' => 'Data Berhasil Disimpan!']);;
        return redirect('/odc')->with("pesan", "berhasil menambahkan!");
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
        return view('admin/odcDetail', ['data' => $data, 'odc' => $odc]);
        // return "<h1>nama odc dengan id $odc_id</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $odc = odc::where('odc_id', $id)->first();
        return view('admin/odcEdit')->with('data', $odc);
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
            'slot_terpakai' => 'required',
            'slot' => 'required',
            'sisa_slot' => 'required',
            'port_terpakai' => 'required',
            'port' => 'required',
            'sisa_port' => 'required',
            'status' => 'required',
        ],[
            'nama_odc.required'=>'KODE ODC tidak boleh kosong',
            'lokasi.required'=>'Lokasi tidak boleh kosong',
            'kordinat.required'=>'Kordinat tidak boleh kosong',
            'slot_terpakai.required' => 'slot terpakai tidak boleh kosong',
            'slot.required'=>'Slot tidak boleh kosong',
            'sisa_slot.required'=>'Sisa slot tidak boleh kosong',
            'port_terpakai.required' => 'port terpakai tidak boleh kosong',
            'port.required'=>'Port tidak boleh kosong',
            'sisa_port.required'=>'Sisa port tidak boleh kosong',
            'status.required'=>'Status tidak boleh kosong',
        ]);
        $data = [
            'nama_odc' => $request->input('nama_odc'),
            'lokasi' => $request->input('lokasi'),
            'kordinat' => $request->input('kordinat'),
            'slot_terpakai' => $request->input('slot_terpakai'),
            'slot' => $request->input('slot'),
            'sisa_slot' => $request->input('sisa_slot'),
            'port_terpakai' => $request->input('port_terpakai'),
            'port' => $request->input('port'),
            'sisa_port' => $request->input('sisa_port'),
            'status' => $request->input('status'),
        ];
        odc::where('odc_id', $id)->update($data);
        return redirect('/odc')->with("pesan", "berhasil merubah!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        odc::where('odc_id', $id)->delete();
        return redirect('/odc')->with("pesan", "berhasil menghapus!");
    }
    /**
     * mencari data terkait melalui fitur search.
     */
    public function CARI(Request $request)
    {
        $cari = $request->Cari;
        $odc = odc::where('nama_odc', 'like', "%".$cari."%")->orwhere('lokasi', 'like', "%".$cari."%")
               ->paginate(10);
        return view('admin/odc')->with('data', $odc);
    }
}
