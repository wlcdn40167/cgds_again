<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function show(){

        $data=Student::all();
        return view('list2',['student'=>$data]);
    }
}
