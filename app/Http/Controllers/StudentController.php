<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    private $genders;
    
    public function __construct(){
        $this->students = config('students.students'); //look into the array of array in the config
        $this->genders = config('students.genders');
    }

    public function index(){
        $data = [
            'students' => $this->students,
            'genders' => $this->genders
        ];
        
        return view('students.index', $data);
    }

    public function show($slug){
        $student = $this->checkId($slug, $this->students);
        if (!$student){
            abort(404, 'Student not found');
        }
        return view('students.show', compact('student'));
    }

    private function checkId($slug, $data){
        foreach ($data as $datum){
            if ($datum['slug'] == $slug){
                return $datum;
            }
        }
        return false;
    }
}
