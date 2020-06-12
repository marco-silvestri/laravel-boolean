<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //  Filter by genders

    public function gender(Request $request){
        //  Handle students & Genders
        $students = config('students.students');
        $genders = config('students.genders');
        
        $gender = $request->input('filter');

        $result = [
            'error' => '',
            'response' => []
        ];

        if(in_array($gender, $genders)){
            if ($gender == 'all'){
                $result['response'] = $students;
            } else {
                foreach ($students as $student){
                    if ($student['genere'] == $gender){
                        $result['response'][] = $student;
                    }
                }
            }
        } else {
            $result['error'] = 'Change your filter';
        }
        return response()->json($result);
    }
}
