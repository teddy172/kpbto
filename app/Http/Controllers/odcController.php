<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\odc; //data diambil dari database melalui model

class odcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $odc = odc::all(); //mengambil semua data dari odc dengan all
        return view ('odc')->with('odc', $odc); //mengembalikan tampilan ke odc bersama variabel $odc
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
        $input = $request->all();
        odc::create($input);
        return redirect('odc');
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
}
