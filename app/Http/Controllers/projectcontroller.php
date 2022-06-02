<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectcontroller extends Controller
{
    public function index(){
        return view('Frontend.master');
    }

    public function index2(){
        return view('Frontend.student');
    }

}
