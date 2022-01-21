<?php

namespace App\Models;

//use App\Models\User as ModelsUser;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class CourseYear extends Model
{
   use HasFactory;

   protected $guarded = [];

   public function course()
   {
      return $this->hasMany(Course::class);
   }
}
