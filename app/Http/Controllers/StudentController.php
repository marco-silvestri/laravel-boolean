<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    
    public function __construct(){
        $this->students = config('students');
    }

    public function index(){
        $students = $this->students;
        return view('students.index', compact('students'));
    }

    public function show($id){
        return view('students.show', compact('id'));
    }
}
