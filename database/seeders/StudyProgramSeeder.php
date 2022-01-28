<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Seeder;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudyProgram::create(
            [
                'kode_prodi' => '19291',
                'prodi_name' => 'Sistem Informasi',
                'faculty_id' => '1',
            ]
        );
    }
}
