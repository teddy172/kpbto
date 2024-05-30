<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\absensi;
use Illuminate\Support\Facades\auth;

class presensiController extends Controller
{
    public function index(){
        $user = Auth::user();
        $today = date('Y-m-d');

        $attendance = absensi::where('user_id', $user->id)->where('tanggal', $today)->first();

        $hasCheckedIn = $attendance ? true : false;
        $hasCheckedOut = $attendance && $attendance->check_out ? true : false;
        
        return view('absen', ['hasCheckedIn' => $hasCheckedIn, 'hasCheckedOut' => $hasCheckedOut]);
    }

    public function kehadiran(Request $request){
        $user = Auth::user();
        $tgl = date('Y-m-d');
    
        //cek user sudah absen
        $absen = absensi::where('user_id', $user->id)->where('tanggal', $tgl)->first();
    
        if($absen){
        //bila sudah absen cek sudah checkout atau belum
            if($absen->check_out){
                return back()->with('error', 'anda sudah check out!');
            }
                $absen->update([
                    'check_out' => now(),
                ]);
                return back()->with('status', 'checkout berhasil');
        } else{
            absensi::create([
                'user_id' => $user->id,
                'check_in' => now(),
                'tanggal' => $tgl,
            ]);
            return back()->with('status', 'check in berhasil');
        };
    }
}
