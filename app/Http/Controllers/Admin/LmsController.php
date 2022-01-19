<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LmsController extends Controller
{
    public function index()
    {
        return view('admin.lmss.index');
    }
}
