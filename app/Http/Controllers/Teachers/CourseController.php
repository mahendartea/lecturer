<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\CourseYear;
use Illuminate\Support\Facades\Gate;

class CourseController extends Controller
{
    public function index()
    {
        if (Gate::denies('manage-courses')) {
            abort(403);
        }

        return view('teacher.courses.index');
    }
}
