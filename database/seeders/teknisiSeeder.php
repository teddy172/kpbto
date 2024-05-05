<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class teknisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teknisi')->insert([
            'nama' => 'endra',
            'password' => '1234',
            'witel' => 'surabaya utara',
            'NIK' => '357204839',
            'nomer_telepon' => '08314758341',
            'zona kerja' => 'kapasan',
            'email' => 'velindakirana@gmail.com',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
