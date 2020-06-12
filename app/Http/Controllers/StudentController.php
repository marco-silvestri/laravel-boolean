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

    public function show($id){
        $student = $this->checkId($id, $this->students);
        if (!$student){
            abort(404, 'Student not found');
        }
        return view('students.show', compact('student'));
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
