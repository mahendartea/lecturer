<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataptnController extends Controller
{
    public function index()
    {
        return view('admin.ptns.index');
    }
}
