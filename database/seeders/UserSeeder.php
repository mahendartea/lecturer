<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      DB::table('users')->insert([
         'name' => 'Mahendar Dwi Pyana',
         'email' => 'hendartea@gmail.com',
         'password' => Hash::make('mahendar'),
         'id_pt' => '1',
         'student_address' => '',
         'role_id' => '1',
      ]);
      // DB::table('users')->insert([
      //    'name' => 'Mahendar Dwi Pyana',
      //    'email' => 'mahendar@uui.ac.id',
      //    'password' => Hash::make('mahendar'),
      //    'id_pt' => '1',
      //    'student_address' => '',
      //    'role_id' => '3',
      // ]);
   }
}
