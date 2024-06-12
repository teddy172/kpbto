<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\assurance;
use Carbon\Carbon;

class assuranceController extends Controller
{
    public function index(string $id){
        $data = assurance::where('teknisi_id', $id)->where('status', 'open')->get();
        return view('assurance1')->with('data', $data);
    }

    public function edit(string $id){
        $data = assurance::find($id);
        $tabel = assurance::where('teknisi_id', $data->teknisi_id)->where('status', 'open')->get();
        return view ('assurance2', ['time' => $data, 'tabel' => $tabel]);
    }

    public function update(Request $request, string $id){
        $assurance = Assurance::find($id);
        $waktuWib = Carbon::now('Asia/Jakarta');

        if($request->has('teknisi_berangkat')) {
            if (is_null($assurance->teknisi_berangkat)){
            $assurance->teknisi_berangkat = $waktuWib;
            }
        
        }else if($request->has('teknisi_tiba')) {
            if (is_null($assurance->teknisi_tiba)){
            $assurance->teknisi_tiba = $waktuWib;
            }

        }else if($request->has('tech_closed')) {
            if ($assurance->status !== 'closed'){
            $assurance->status = 'closed';
            }
        }

        $assurance->save();

        return redirect()->back()->with('success', 'Status updated successfully!');
    }
}
