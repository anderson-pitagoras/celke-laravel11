<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Carregar View
    public function index(){
        return view('courses.index');
    }
}
