<?php

namespace Database\Seeders;

use App\Models\CourseYear;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseYearSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      CourseYear::create(
         [
            'semester' => 'Ganjil',
            'year' => '2021',
            'ket_tahun_ajar' => 'Ganjil 2021',
            'user_id' => 1
         ],
         [
            'semester' => 'Genap',
            'year' => '2021',
            'ket_tahun_ajar' => 'Genap 2021',
            'user_id' => 1
         ]
      );
   }
}
