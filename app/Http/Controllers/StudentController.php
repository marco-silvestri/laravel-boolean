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
        $student = $this->checkId($id, $this->students);
        if (!$student){
            abort(404, 'Student not found');
        }
        return view('students.show');
    }

    private function checkId($id, $data){
        foreach ($data as $datum){
            if ($datum['id'] == $id){
                return $datum;
            }
        }
        return false;
    }
}
