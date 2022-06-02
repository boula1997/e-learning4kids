<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chirp;
use App\Events\ChirpAction;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     // $this->middleware('auth');  /// user must be authunticated
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


}
