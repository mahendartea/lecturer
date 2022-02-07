<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Budiawan',
            'email' => 'budiawan@gmail.com',
            'password' => Hash::make('budiawan'),
            'id_pt' => '310',
            'student_address' => '',
            'role_id' => '3',
        ]);
        DB::table('users')->insert([
            'name' => 'Budiawan',
            'email' => 'budiawan@gmail.com',
            'password' => Hash::make('budiawan'),
            'id_pt' => '310',
            'student_address' => '',
            'role_id' => '3',
        ]);
    }
}
