<?php

namespace App\Models;

//use App\Models\User as ModelsUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class CourseYear extends Model
{
   use HasFactory;

   protected $fillable = [
      'semester',
      'year',
      'ket_tahun_ajar',
      'user_id',
   ];
}
