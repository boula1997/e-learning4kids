<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sendEmailController extends Controller
{
    public function start(Request $request){
        return "Start";
    }
    public function ship(Request $request){
        return "ship";
    }
    public function completed(Request $request){
        return "completed";
    }



    // public function store(Request $request){
    //     $order = Student::findOrFail($request->order_id);

    //     // Ship the order...
    //     Mail::to($request->user())->send(new OrderShipped($order));
    // }

}
