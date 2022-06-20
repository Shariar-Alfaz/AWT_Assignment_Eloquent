<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class PageController extends Controller
{
    public function home()
    {   
        $dept = Department::all();
        return view('home')->with('depts',$dept);
    }
}
