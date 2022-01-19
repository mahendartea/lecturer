<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class DedicationController extends Controller
{
    public function index()
    {
       if(Gate::denies('manage-courses'))
       {
          abort(403);
       }

       return view('teacher.dedications.index');
    }
}
