<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class odcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('odc')->insert([
            'nama_odc' => 'ODC-KBL-FAB',
            'lokasi' => 'sidotopo wetan',
            'kordinat' => '-7.233031, 112.772501',
            'slot_terpakai' => '6',
            'port_terpakai' => '228',
            'slot' => '25',
            'sisa_slot' => '8',
            'port' => '300',
            'sisa_port' => '72',
            'status' => 'up',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
