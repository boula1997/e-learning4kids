<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParentModel;
class ParentController extends Controller
{

    public function index(){
        $parents= ParentModel::where('fname', 'boula')->get();
        return view('Frontend.studentIndex',compact('parents'));
    }

}
