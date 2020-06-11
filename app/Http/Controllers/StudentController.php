<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    

    public function index(){
        $students = config('students');
        return view('students.index', compact('students'));
    }

    public function show($id){

    }
}
