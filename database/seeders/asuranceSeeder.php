<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class asuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        'teknisi_id' => '1',
        'nama_pelanggan' => 'salim bacthir',
        'alamat' => 'wonokromo',
        'no_telepon' => '081357439135',
        'no_internet' => '5432461',
        'no_incident' => 'INC08823149',
        'keluhan' => 'tidak bisa terkoneksi ke internet',
        'status' => 'open',
        'created_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
