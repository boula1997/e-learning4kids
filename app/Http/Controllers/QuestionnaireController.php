<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Student;
use Redirect,Response;


class QuestionnaireController extends Controller
{
    public function show(Request $request ,Student $student){
        return view('Frontend.jsonSurvey');
    }

    public function showResult(Request $request){
        $results = json_decode($request->surveyFinalResult, true)['Quality'];
        // $type1 = isset($results['1']) ? $results['1'] : 0 + isset($results['2']) ? $results['2'] : 0;
        $type1 = $results['1'] + $results['6'] +$results['11']+ $results['16']+$results['21']+$results['26']+$results['31']+$results['36'];
        $type2 = $results['2'] + $results['7'] +$results['12']+ $results['17']+$results['22']+$results['27']+$results['32']+$results['37']+$results['42'];
        $type3 = $results['3'] + $results['8'] +$results['13']+ $results['18']+$results['23']+$results['28']+$results['33']+$results['38']+$results['43'];
        $type4 = $results['4'] + $results['9'] +$results['14']+ $results['19']+$results['24']+$results['29']+$results['34']+$results['39'];
        $type5 = $results['5'] + $results['10'] +$results['15']+ $results['20']+$results['25']+$results['30']+$results['35']+$results['40']+$results['41']+$results['44'];
        // print_r($type1/8);
        // print_r($type2/9);
        // print_r($type3/9);
        // print_r($type4/8);
        // print_r($type5/10);
        // foreach($results as $key => $value) {
        //     dump($key);
        // }
        // die();
        $personalTypes = ['extraversion' => $type1/8, 'agreeableness'=>$type2/9, 'consientiousness'=>$type3/9, 'neuroticism'=>$type4/8, 'openness'=>$type5/10];
        return view('Frontend.surveyResult',compact('personalTypes') );
    }

    
    // public function update(Request $request){
        
    //     $student->update($request->only([
    //         'personality_type'
    //     ]));
    //     return view('Frontend.jsonSurvey', compact('student'));
    // }
}
