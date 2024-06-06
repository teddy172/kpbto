<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class odpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('odp')->insert([
            'nama_odp' => 'ODp-KBL-FAB/12',
            'odc_id' => '1',
            'lokasi' => 'surabaya',
            'kordinat' => '-7.233031, 112.774501',
            'port_terpakai' => '8',
            'port' => '8',
            'sisa_port' => '0',
            'status' => 'up',
            'distribusi' => '02',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
