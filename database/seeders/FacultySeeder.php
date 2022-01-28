<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // FacultySeeder
        Faculty::create(
            [
                'faculty_code' => '111',
                'faculty_name' => 'Fakultas Ilmu Komputer',
                'dataptn_id' => '1',
            ],
        );
    }
}
