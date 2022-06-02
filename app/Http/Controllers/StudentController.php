<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //
    public function index(){
        $students= Student::where('fname', 'boula')->get();
        return view('Frontend.studentIndex',compact('students'));
    }

}
