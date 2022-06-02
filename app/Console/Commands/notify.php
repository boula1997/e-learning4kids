<?php

namespace App\Console\Commands;
use App\Models\Student;
use App\Models\TeacherAssignment;
use App\Models\StudentRegisteration;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\TomorrowDeadline;
use Carbon\Carbon;
class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email notify for all users every day';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Carbon::now()->addDays(-1)
        $studentRegs=StudentRegisteration::all();
        $teacherAssignments=TeacherAssignment::where('due', '>=', Carbon::tomorrow())->get();
        
        // dd($teacherAssignment);
        foreach( $teacherAssignments as  $teacherAssignment){
            // dd($teacherassignment->classroom_id);
            foreach($studentRegs as $studentReg){
                if ($studentReg->classroom_id==$teacherAssignment->classroom_id){
                //    $studentReg->student->email
                 $data=['title'=>'programming','courseCode'=>'123456','Reg'=>'17100652'];
                   Mail::To( $studentReg->student->email)->send(new TomorrowDeadline($data));
                }
                
            }
        }
        
        

        // $data=['name'=>$request->input('name'),'email'=>$request->input('email'),'subject'=>$request->input('subject'),'message'=>$request->input('message')];
        // Mail::To("support@e-learning4kids.com")->cc($request->input('email'))->send(new HelpEmail($data));
        // $emails= Student::pluck('email')->toArray();
        
        // foreach($emails as $email){           
        
        // $students= Student::select('email')->get();
        
        // $data=['title'=>'programming','courseCode'=>'123456','Reg'=>'17100652'];
        // foreach($emails as $email){
        //     // Mail::to($request->user())->send(new MailableClass);
        //     Mail::To($email)->send(new TomorrowDeadline($data));
        // }
    }
}
