<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseYear;
use App\Models\StudyProgram;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function courseyear()
    {
        return $this->belongsTo(CourseYear::class, 'course_year_id');
    }

    public function studyprogram()
    {
        return $this->belongsTo(StudyProgram::class, 'study_program_id');
    }
}
