<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'verina',
            'email' => 'verina@gmail.com',
            'password' => Hash::make('verina123'),
            'created_at' =>  date('Y-m-d H:i:s'),
            'NIP' => '322157',
            'nomer_telepon' => '081259642316'
        ]);
    }
}
