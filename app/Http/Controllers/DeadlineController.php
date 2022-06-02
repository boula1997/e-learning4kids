<?php
namespace App\Http\Controllers;
use App\Mail\TomorrowDeadline;
use App\Mail\HelpEmail;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\TeacherAssignment;
use App\Models\StudentRegisteration;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
class DeadlineController extends Controller
{

    public function index(){

        // $studentRegs=StudentRegisteration::all();
        // $teacherAssignments=TeacherAssignment::where('due', '>=', Carbon::tomorrow())->get();
        // // dd($teacherAssignment);
        // foreach( $teacherAssignments as  $teacherAssignment){
            
        //     // dd($teacherassignment->classroom_id);
        //     foreach($studentRegs as $studentReg){
        //         if ($studentReg->classroom_id==$teacherAssignment->classroom_id){
        //         //    $studentReg->student->email
        //          $data=['title'=>'programming','courseCode'=>'123456','Reg'=>'17100652'];
        //            Mail::To( $studentReg->student->email)->send(new TomorrowDeadline($data));
        //         }
                
        //     }
        // }

        
        $emails= Student::pluck('email')->toArray();
        $data=['title'=>'programming','courseCode'=>'123456','Reg'=>'17100652'];
        // Mail::To("k.k.nashed@gmail.com")->send(new NotifyEmail($data));
        Mail::To("support@e-learning4kids.com")->cc("k.k.nashed@gmail.com")->send(new TomorrowDeadline($data));
        
        return redirect()->back()->with('message', 'IT WORKS!');
    }
    public function helpAnyone(Request $request){
        // $emails= Student::pluck('email')->toArray();
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            // 'password' => 'required'
        ]);

        $data=['name'=>$request->input('name'),'email'=>$request->input('email'),'subject'=>$request->input('subject'),'message'=>$request->input('message')];
        Mail::To("support@e-learning4kids.com")->cc($request->input('email'))->send(new HelpEmail($data));
        // foreach($emails as $email){           
        //     Mail::To($email)->send(new NotifyEmail($data));
        // }
        return redirect()->back()->with('message', 'IT WORKS!');
    }


    

}









// <!-- <script>
//     setInterval(function () {
//         var date = new Date();
//         if (date.getDate() === 12 && date.getHours() === 10 && date.getMinutes === 0) {
//             alert("Surprise!!"+date.getDate())
//         }
//     }, 1000)

//   </script> -->