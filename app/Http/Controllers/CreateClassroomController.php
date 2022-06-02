<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
         
        //return view('Frontend.createClassroom');

         $classrooms = Classroom::latest()->paginate(100);
        return view('Frontend.teacher', compact('classrooms'))
             ->with('i', (request()->input('page', 1) - 1) * 100);
    }

     public function boula()
     {
        //return view('Frontend.createClassroom');

        $courses = Course::latest()->paginate(100);

         return view('Frontend.createClassroom', compact('courses'))
             ->with('i', (request()->input('page', 1) - 1) * 5);
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    
    public function store(Request $request)
    {
        
    //    dd($request->all());
        $request->validate([
            'title' => 'required',
            'course_id' => 'required',
            'teacher_id' => 'required'
        ]);

        $flag = 0;
        while($flag !== 1){
            $classRoomCode = Str::random(6);

            if(!Classroom::where('classroom_code', $classRoomCode)->exists()){
                $flag = 1;
            }
        }

        $request['classroom_code'] = $classRoomCode;

        if( $file=$request->file('file'))
        {

            
        $name=$file->getClientOriginalName();

        $file->move('materials',$name);

       Classroom::create([ 
            'title' => $request->input('title'),
            'teacher_id' => $request->input('teacher_id'),
            'course_id' => $request->input('course_id'),
            'classroom_code' => $classRoomCode,
            'content' => $name,
            ]);}

            else
          {
              $name="defualtImage.png";  
       Classroom::create([ 
        'title' => $request->input('title'),
        'teacher_id' => $request->input('teacher_id'),
        'course_id' => $request->input('course_id'),
        'classroom_code' => $classRoomCode,
        'content' => $name,
        ]);}
            

            // else
            // Classroom::create($request->all());

        // return redirect()->intended('proucts')
        //     ->with('success', 'Product created successfully.');
      
        return redirect()->intended('teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        //
    }
}
