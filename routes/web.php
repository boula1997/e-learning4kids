<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Teacher;
use App\Models\Classroom;
use App\Models\StudentRegisteration;
use App\Models\Course;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CreateClassroomController;
use App\Http\Controllers\ClassroomContent;
use App\Models\Student;
use App\Models\ParentModel;
use App\Http\Controllers\Request;
use App\Http\Controllers\QuestionnaireController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*-------------------------------Midelware Student,Teacher,Parent------------------------------------------*/
Route::group(['middleware' => 'auth:student,teacher,parent'],function () {
    Route::get('/profile', [App\Http\Controllers\ClassroomContent::class, 'showProfileDetails'])->name('show.profileDetails');
    Route::get('/Setting', [App\Http\Controllers\ClassroomContent::class, 'showaccountsetting'])->name('show.accountsetting');
    Route::put('/profileUpdate', [App\Http\Controllers\ClassroomContent::class, 'updateInfo'])->name('profileUpdate');

    Route::get('/', function () {
        return view('Frontend.home');
    })->name("home");

   
    Route::get('sendHelpEmail', function () {
        return view('Frontend.help');
    })->name('sendHelpEmail');
    
    Route::post('/helpAnyone', [App\Http\Controllers\DeadlineController::class, 'helpAnyone'])->name('help.anyone');
    
});
/*-------------------------------End of Midelware Student,Teacher,Parent------------------------------------------*/


/*-------------------------------Midelware Student,Teacher---------------------------------------------*/
Route::group(['middleware' => 'auth:student,teacher'],function () {
    Route::get('/post', [App\Http\Controllers\ClassroomContent::class, 'showClassroom'])->name('show.classroom');
    Route::resource('contents', ClassroomContent::class);
    Route::post('/post', [App\Http\Controllers\ClassroomContent::class, 'post'])->name("contents");
    Route::post('/comment', [App\Http\Controllers\ClassroomContent::class, 'comment'])->name("post.comment");
    Route::get('/showteacherAssignment', [App\Http\Controllers\ClassroomContent::class, 'showTeacherAssignment'])->name('show.teacherAssignment');
    Route::get('/showAssignment', [App\Http\Controllers\ClassroomContent::class, 'showAssignment'])->name('show.Assignment');

    Route::get('/downloadStudentAssignment', [App\Http\Controllers\ClassroomContent::class, 'downloadStudentAssignment'])->name('download.studentAssignment');
    Route::get('/downloadTeacherAssignment', [App\Http\Controllers\ClassroomContent::class, 'downloadTeacherAssignment'])->name('download.teacherAssignment');
    Route::get('/downloadPost', [App\Http\Controllers\ClassroomContent::class, 'downloadPost'])->name('download.post');
    Route::get('/downloadcomment', [App\Http\Controllers\ClassroomContent::class, ' commentDownload'])->name('download.comment');
    Route::get('/delete', [App\Http\Controllers\ClassroomContent::class, 'deletecontent'])->name('delete.content');
    Route::post('/updateContent', [App\Http\Controllers\ClassroomContent::class, 'updateContent'])->name('update.content');
    Route::get('/editPostorComment', [App\Http\Controllers\ClassroomContent::class, 'editPostorComment'])->name('edit.postorcomment');
    
    Route::get('/showAllMemebers', [App\Http\Controllers\ClassroomContent::class, 'showAllMemebers'])->name('showAllMemebers');
    

    // Route::get('viewAllMembers', function () {
    //     return view('Frontend.viewMembers');
    // })->name("viewMemebrs");
    

});

/*-------------------------------End of Midelware Student,Teacher---------------------------------------------*/


Route::group(['middleware' => 'auth:student'], function () {

    Route::get('/student', function () {
        $studentregs = StudentRegisteration::latest()->paginate(100);
        $classrooms = Classroom::latest()->paginate(100);
    return view('Frontend.student',compact('studentregs','classrooms'));
    })->name('student');

    Route::get('/studentcoursedetails', function () {
        $parents= ParentModel::all();
        $students= Student::all();
        $studentregistrations=StudentRegisteration::all();
        $classrooms=Classroom::all();
        $courses= Course::all();
        $teachers= Teacher::all();
        return view('Frontend.studentcoursedetails',compact("parents", "students", "studentregistrations", "classrooms","courses","teachers"));
    })->name("studentcoursedetails");
    Route::get('/results', [App\Http\Controllers\ClassroomContent::class, 'showResult'])->name('show.result');
        
    Route::get('/submitassignment', function () {
        return view('Frontend.submitassignment');
    })->name("submitassignment");

    Route::get('/viewassignments', function () {
        return view('Frontend.viewassignments');
    })->name("viewassignments");

    Route::post('/submitAssignment', [App\Http\Controllers\ClassroomContent::class, 'submitAssignment'])->name("submit.assignment");
    Route::get('/StudentCertificate', [App\Http\Controllers\ClassroomContent::class, 'showcertificate'])->name("show.certificate");

    

    
    Route::get('/studentJoin', function () {
        return view('Frontend.student-join-classroom');
    })->name("studentJoin");


    Route::get('result',[App\Http\Controllers\QuestionnaireController::class, 'showResult'])->name('result');
    Route::match(['put',' patch'], 'questionnaire', [App\Http\Controllers\QuestionnaireController::class, 'update']);
    Route::get('questionnaire',[App\Http\Controllers\QuestionnaireController::class, 'show']);
    Route::post('/updatepersonality', [App\Http\Controllers\ClassroomContent::class, 'updatepersonality'])->name('update.personality');
   
});


Route::group(['middleware' => 'auth:teacher'], function () {
    Route::get('/teacher', function () {
        $studentregs = StudentRegisteration::latest()->paginate(100);
        $classrooms = Classroom::latest()->paginate(100);
    //  dd($classrooms);
            return view('Frontend.teacher', compact('classrooms'));
    })->name("teacher");
    Route::get('/studentresults', [App\Http\Controllers\ClassroomContent::class, 'addResult'])->name('add.result');
    Route::get('/editresults', [App\Http\Controllers\ClassroomContent::class, 'editResult'])->name('edit.result');
    Route::post('/updateresults', [App\Http\Controllers\ClassroomContent::class, 'updateResult'])->name('update.result');
    Route::get('/editGrade', [App\Http\Controllers\ClassroomContent::class, 'editGrade'])->name('edit.grade');
    Route::post('/updategrade', [App\Http\Controllers\ClassroomContent::class, 'updategrade'])->name('update.grade');


    

    Route::post('/addAssignment', [App\Http\Controllers\ClassroomContent::class, 'addAssignment'])->name("add.assignment");
    Route::get('/showstudentAssignment', [App\Http\Controllers\ClassroomContent::class, 'showStudentAssignment'])->name('show.studentAssignment');

    Route::get('/viewAddassignment', [App\Http\Controllers\ClassroomContent::class, 'viewAddassignment'])->name('view.addAssignment');

    Route::get('/createClassroom', function () {
        $courses = Course::latest()->paginate(100);
        return view('Frontend.createClassroom', compact('courses'));
    })->name("createClassroom");


});

Route::group(['middleware' => 'auth:parent'], function () {
    Route::get('/parent', function () {
        $parents= ParentModel::all();
        $students= Student::all();
        $studentregistrations=StudentRegisteration::all();
        $classrooms=Classroom::all();
        $courses= Course::all();
        $teachers= Teacher::all();
        return view('Frontend.parent',compact("parents", "students", "studentregistrations", "classrooms","courses","teachers"));
    })->name("parent");
    Route::get('/showSCourseDetails', [App\Http\Controllers\ClassroomContent::class, 'showCourseDetails'])->name('show.coursedetails');
    // Route::put('/profileUpdate', [App\Http\Controllers\ClassroomContent::class, 'updateInfo'])->name('profileUpdate');
});













/** */
Route::get('/', function () {
    return view('Frontend.home');
})->name("home");


Route::get('/newLogin', function () {
    return view('Frontend.newLogin');
});
Route::get('/newForget', function () {
    return view('Frontend.newForgetPass');
});


Route::get('/materials', function () {
    return view('Frontend.materials');
})->name("materials");


Route::get('/registerAs', function () {
    return view('Frontend.registerAs');
})->name("registerAs");

Route::get('/loginAs', function () {
    return view('Frontend.loginAs');
})->name("loginAs");


Route::get('/studentClassroom', function () {
    return view('Frontend.student-classroom');
})->name("");


Route::get('/teacherClassroom', function () {
    return view('Frontend.teacher-classroom');
})->name("");

Route::get('certificate', function () {
    return view('Frontend.certificate');
})->name("certificate");

    Auth::routes(['verify'=>true]);
    Auth::routes();

// Teacher login and register
Route::get('/register/student', 'App\Http\Controllers\Auth\RegisterController@showStudentRegisterForm')->name("register/student");
Route::post('/register/student', 'App\Http\Controllers\Auth\RegisterController@createStudent');
Route::get('/login/student', 'App\Http\Controllers\Auth\LoginController@showStudentLoginForm')->name("login/student");
Route::post('/login/student', 'App\Http\Controllers\Auth\LoginController@studentLogin');

// parent login and register
Route::get('/register/parent', 'App\Http\Controllers\Auth\RegisterController@showParentRegisterForm')->name("register/parent");
Route::post('/register/parent', 'App\Http\Controllers\Auth\RegisterController@createParent');
Route::get('/login/parent', 'App\Http\Controllers\Auth\LoginController@showParentLoginForm')->name("login/parent");
Route::post('/login/parent', 'App\Http\Controllers\Auth\LoginController@parentLogin');


// teacher login and register
Route::get('register/teacher', 'App\Http\Controllers\Auth\RegisterController@showTeacherRegisterForm')->name("register/teacher");
Route::post('register/teacher', 'App\Http\Controllers\Auth\RegisterController@createTeacher');

Route::get('login/teacher', 'App\Http\Controllers\Auth\LoginController@showTeacherLoginForm')->name("login/teacher");
Route::post('login/teacher', 'App\Http\Controllers\Auth\LoginController@teacherLogin');

// Route::resource('products', ProductController::class); /tbd
// Route::resource('proucts', CreateClassroomController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/studnetIndex', [App\Http\Controllers\ParentController::class, 'index']);
// Route::post('/proucts', [CreateClassroomController::class, 'store'])->name('proucts');

Route::resource('proucts', CreateClassroomController::class);
Route::get('/proucts', [App\Http\Controllers\CreateClassroomController::class, 'boula'])->name("proucts");



// Route::get('start',[App\Http\Controllers\sendEmailController::class, 'start']);
// Route::get('ship',[App\Http\Controllers\sendEmailController::class, 'ship']);
// Route::get('completed',[App\Http\Controllers\sendEmailController::class, 'completed']);





Route::get('/studentIndex', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('/sendEmail', [App\Http\Controllers\DeadlineController::class, 'index'])->name('sendEmail');

Route::get('cards', function () {
    return view('Frontend.cardsTrails');
});
Route::get('spare', function () {
    return view('Frontend.spare');
});

Route::get('notAutherized', function () {
    return view('Frontend.notAutherized');
})->name('notAutherized');






