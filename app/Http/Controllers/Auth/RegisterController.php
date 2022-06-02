<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\ParentModel;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:student');
        $this->middleware('guest:teacher');
        $this->middleware('guest:parent');

    }

    public function showStudentRegisterForm()
    {

        return view('Frontend.newStudentRegister', ['url' => 'student']);

    }

    protected function createStudent(Request $request)
    {

        if ($request->input('personality_type')==null)
        {
            // dd($request->input('personality_type'));
        $request->validate( [
            'fname' => ['required', 'string', 'max:255'],
            'lname'=>['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:student'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address'=>['required', 'string', 'min:3'],
            'term'=>['required', 'string', 'min:3'],
            'parent_id'=>['required', 'string', 'min:1'],
            'phone'=>['required', 'string', 'max:11'],
            'file'=>['required'],
            // 'specialization'=>['required', 'string', 'min:1'],

        ]);

        $file=$request->file('file');
        $name=$file->getClientOriginalName();

        $file->move('materials',$name);

        $student = Student::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'address' => $request['address'],
            'term' => $request['term'],
            'parent_id' => $request['parent_id'],
            'name_of_school' => $request['name_of_school'],
            'photo' => $name,
            'phone' => $request['phone'],
            // 'specialization' => $request['specialization'],
        ]);
        return redirect()->intended('login/student');
        }


    }

    public function showTeacherRegisterForm()
    {

        return view('Frontend.newteacherRegister', ['url' => 'teacher']);

    }

    protected function createTeacher(Request $request)
    {
        $request->validate( [
            'fname' => ['required', 'string', 'max:255'],
            'lname'=>['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:teacher'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address'=>['required', 'string', 'min:3'],
            'age'=>['required', 'string', 'min:1'],
            'phone'=>['required', 'string', 'min:1'],
            'specialization'=>['required', 'string', 'min:1'],
            'name_of_school'=>['required', 'string', 'min:1'],
            'phone'=>['required', 'string', 'max:11'],
            'file'=>['required']

        ]);

        $file=$request->file('file');
        $name=$file->getClientOriginalName();

        $file->move('materials',$name);

        $teacher = Teacher::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'address' => $request['address'],
            'age' => $request['age'],
            'phone' => $request['phone'],
            'specialization' => $request['specialization'],
            'name_of_school' => $request['name_of_school'],
            'photo' => $name,
        ]);
        return redirect()->intended('teacher' );
    }


    public function showParentRegisterForm()
    {

        return view('Frontend.newparentRegister', ['url' => 'parent']);

    }

    protected function createParent(Request $request)
    {

        $request->validate( [
            'fname' => ['required', 'string', 'max:255'],
            'lname'=>['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:parent'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address'=>['required', 'string', 'min:3'],
            'relation'=>['required', 'string', 'min:1'],
            'number_of_children'=>['required', 'string', 'min:1'],
            'age'=>['required', 'string', 'min:1'],
            'phone'=>['required', 'string', 'max:11'],
            'file'=>['required']

        ]);

        $file=$request->file('file');
        $name=$file->getClientOriginalName();

        $file->move('materials',$name);

        $parent = ParentModel::create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'address' => $request['address'],
            'phone' => $request['phone'],
            'relation' => $request['relation'],
            'number_of_children' => $request['number_of_children'],
            'age' => $request['age'],
            'photo' => $name,
        ]);
        return redirect()->intended('parent');


    }





    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname'=>['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:student'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address'=>['required', 'string', 'min:3'],
            'term'=>['required', 'string', 'min:1'],
            // 'personality_type'=>['required', 'string', 'min:3'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(array $data)
    {
        return Student::create([
            'fname' => $data['fname'],
            'lname'=>$data['lname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'term' => $data['term'],
            // 'personality_type' => $data['personality_type'],

        ]);
    }
}
