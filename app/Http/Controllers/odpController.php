<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\odp; //data diambil dari database melalui model

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
