<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class GraduatesController extends Controller
{
    function show(){

        $data=Student::all();
        return view('list',['student'=>$data]);
    }
}
