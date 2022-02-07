<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            // PtSeeder::class,
            // LecturerSeeder::class,
            UserSeeder::class,
            CourseYearSeeder::class,
            FacultySeeder::class,
            StudyProgramSeeder::class,
            CourseSeeder::class,
        ]);
    }
}
