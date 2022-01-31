<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudyProgram;

class Faculty extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function studyprogram()
    {
        return $this->hasMany(StudyProgram::class);
    }
}
