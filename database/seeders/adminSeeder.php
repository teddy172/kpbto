<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            'admin_name' => 'tito',
            'admin_email' => 'tito@gmail.com',
            'admin_password' => Hash::make('tiogep123'),
            'created_at' =>  date('Y-m-d H:i:s'),
            'admin_NIP' => '332201',
            'nomer_telepon_admin' => '081259640394'
        ]);
    }
}
