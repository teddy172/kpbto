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
            'nama_odc' => 'ODC-KBL-FAG',
            'lokasi' => 'pogot',
            'kordinat' => '-7.233037, 112.771035',
            'slot' => '25',
            'sisa_slot' => '6',
            'port' => '300',
            'sisa_port' => '72',
            'status' => 'up',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
