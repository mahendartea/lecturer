<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Gate;

class ResearchController extends Controller
{
    public function index()
    {
       if (Gate::denies('manage-courses')) {
          abort(403);
       }

       return view('teacher.researches.index');
    }
}
