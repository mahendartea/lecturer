<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Course::create(
      [
        'code_course' => 'INF212',
        'name_course' => 'Mobile Programming',
        'course_years_id' => '2',
        'class'=> 'A',
        'user_id' => 2,
        'prodi_id' => '19291'
      ],
    );
  }
}
