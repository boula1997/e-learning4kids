<?php

namespace App\Console\Commands;
use App\Models\Student;
use Illuminate\Console\Command;

class SendReminderEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Notification to user about reminders.';

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
        // get all reminder for today
        // $reminder=Reminder::query();
        // groub by yser
        // send email
        // return 0;
        $students= Student::where('expire', 1)->get();
        foreach($students as $student){
            $student->update(['expire'=>1]);
        }

    }
}
