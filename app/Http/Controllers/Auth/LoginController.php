<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ParentModel;
use App\Models\Classroom;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Client\Request as ClientRequest;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:student')->except('logout');
        $this->middleware('guest:teacher')->except('logout');
        $this->middleware('guest:parent')->except('logout');


        // $this->request = $request;
        // $this->middleware("auth:teacher");


    }

    public function showStudentLoginForm()
    {
        return view('Frontend.newLogin',  ['url' => 'student']);
    }
    public function showTeacherLoginForm()
    {
        return view('Frontend.newLogin',  ['url' => 'teacher']);
    }

    public function showParentLoginForm()
    {
        return view('Frontend.newLogin', ['url' => 'parent']);
    }

    // $request->validate( [
    //     'classroom_code' => 'required|string|max:30|exists:classroom,classroom_code'
    // ]);

    public function studentLogin(Request $request)
    {
        // dd($request->password);
        $this->validate($request, [
            'email'   => 'required|email|string|max:255|exists:student',
            'password' => 'required|min:8'
        ]);
        if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    // if successful, then redirect to their intended location
                    $data=$request->input();
                    $request->session()->put('email', $data['email'] );


                    if(Auth::guard('student')->user()->personality_type==null){
                        // dd(Auth::guard('student')->user()->personality_type);
                        return redirect('questionnaire');
                    }
                    else
                    return redirect()->intended('student');
                } 
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function teacherLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email|string|max:255|exists:teacher',
            'password' => 'required|min:8'
        ]);
        if (Auth::guard('teacher')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    // if successful, then redirect to their intended location
                    $data=$request->input();
                    $request->session()->put('email', $data['email'] );

                    // $classrooms = Classroom::latest()->paginate(100);
                    // return view('Frontend.teacher', compact('classrooms'))
                    //     ->with('i', (request()->input('page', 1) - 1) * 100);
                    // return redirect()->route('proucts.index');
                    return redirect()->intended('teacher');

                }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }




    public function parentLogin (Request $request) {
        $this->validate($request, [
            'email'   => 'required|email|string|max:255|exists:parent',                   
            'password' => 'required|min:8'
        ]);
        if (Auth::guard('parent')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    // if successful, then redirect to their intended location
                    $data=$request->input();
                    $request->session()->put('email', $data['email'] );
                    return redirect()->intended('parent');

        }
        return redirect()->back()->withInput($request->only('email', 'remember'));

    }
}
