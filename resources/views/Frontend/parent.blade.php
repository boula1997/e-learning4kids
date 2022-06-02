
@extends('Frontend.master')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Learning for Kids</title>
    <link rel="icon" href="{{asset('images/icon2.jpg')}}" />
    <link rel='stylesheet'href ="{{asset('css/bootstrap.css')}}"/>
            <link rel='stylesheet'href ="{{asset('css/font-awesome.min.css')}}"/>
            <link rel='stylesheet'href ="{{asset('css/style.css')}}"/>
            <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
            <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>
            <link rel='stylesheet'href ="{{asset('css/childview.css')}}"/>
            <link rel='stylesheet'href ="{{asset('css/parentStyle.css')}}"/>

    </head>
    <body>


@section('content')

    <div class="row" style="margin-bottom: 90px">
        <div class="col-lg-8 col3">
        <img class="img img-responsive" src="{{asset('images/3.jpeg')}}" alt="">
        </div>

        <div class="col-lg-4 col4">   
            <h2>Parent Dashboard</h2>
            {{-- <p>Hello ,{{session()->get('email')}}</p> --}}
            <p hidden>{{Auth::guard('parent')->user()->user_id}}</p>
            
            {{-- {{ __('You are logged in!') }} --}}
            <p style="margin: 5px 23px 0 0;">Learning System for kids is an education via the Internet, network, or standalone computer.
              It is an online platform where students can learn,
               teachers can create contents and Parents can monitor their children</p>
               <a href="{{asset('#children')}}"><button class="common-btn">Your Kids</button></a>
            
    
    
          </div>
    </div>

    <!--Body-->
    <div class="row" id="children">
        <b hidden>{{$flag=0}}</b>
        @foreach ($students as $student)
        @if ($student->parent_id == Auth::guard('parent')->user()->user_id )
    
        <div class=" col-lg-4  col-md-4 col-sm-4 col-xm-4  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >
            <i class="fa fa-user fa-5x"></i>
            <h1> {{$student->fname}}</h1>
            <button class="common-btn"  style="margin-left: 90px" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-5" href="#collapse-{{$student->user_id}}">{{$student->fname}} </button>
            {{-- <h1><button onclick="myFunction()" type="button" class="btn btn-primary">View {{$student->fname}} Courses</button></h1> --}}
            {{-- <button onclick="myFunction()">View {{$student->fname}} Courses</button> --}}
            {{-- <p class="lead">Welcome to School</p> --}}
            <b hidden>{{$flag++}}</b>
        </div>
        @endif

        @endforeach

        @if ($flag==0 )
        
        <div class="col-lg-4  col-md-4 col-sm-4 col-xm-4  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300">
        </div>
        <div class="col-lg-4  col-md-4 col-sm-4 col-xm-4 col13 wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" style="text-align: center;">
            <i class="fa fa-user fa-5x"></i>
            <h1> You Don't Have Any<br>Chlid Register Yet</h1>
            {{-- <p class="lead">Welcome to School</p> --}}

        </div>
        <div class="col-lg-4  col-md-4 col-sm-4 col-xm-4  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300">
        </div>
        @endif
    

        </div>
    </div>

    <section class="price_table text-center">
    <div class="container-fluid">
        @if ($flag!=0)
        <h1 >Enrollment courses</h1>
        @endif
        <div class="row">
            

        {{-- <div id="myDIV" style="display: none">    --}}
            @foreach ($students as $student)
            <p hidden>{{$teacherName=''}}{{$courseTitle=''}}</p>
                @if ($student->parent_id == Auth::guard('parent')->user()->user_id)
                <p hidden>{{$student_id= $student->user_id }}</p>
                    
                    
                   
                    <div class="row collapse" style="margin-top: 15px" id="collapse-{{$student->user_id}}" class="bg-light p-2 collapse" >
                   
                        @foreach ($studentregistrations as $studentregistration)
                        @if ($studentregistration->student_id==$student_id)    
                                
                                @foreach ($classrooms as $classroom)
                                    @if ($classroom->classroom_id==$studentregistration->classroom_id)
                                    <p hidden> {{$classroom_id=$classroom->classroom_id}}</p>
                                        
                                        @foreach ($teachers as $teacher)
                                            @if ($teacher->user_id ==$classroom->teacher_id)
                                                <p hidden>{{$teacherName=$teacher->fname}}</p>
                                                {{-- {{$classroom->teacher_id}} --}}
                                            @endif
                                        @endforeach
                                        
                                        @foreach ($courses as $course)
                                            @if ($course->course_id==$classroom->course_id)
                                                <p hidden > {{$courseTitle=$course->title}}</p>
                                                {{-- <p hidden > {{$course_id=$course->course_id}}</p> --}}
                                          
                                     
                                                <div class="col-md-4 col-sm-6 col-xm-12"  >
                                                    <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">
                                                        <div class="img">
                                                            <img  class="center-block" src="materials/{{$classroom->content}}" width="130" height="200" alt="img">
                                                          </div>
                                                        <ul class="info list-unstyled">
                                                            <li >Course Title: {{$courseTitle}}</li>
                                                            <li class="right-text" ></li>
                                                            <li >Dr. {{$teacherName}}</li>
                                                            <a href="{{route('show.coursedetails', ['student_id'=> $student_id,'courseTitle'=>$courseTitle,'teacherName'=>$teacherName, 'classroom_id'=>$classroom_id])}}">Details</a>
                                                            {{-- <a  href="{{url('studentcoursedetails?$course->course_id')}}" >Details</a> --}}
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                         
                                            @endif
                                        @endforeach
                                        
                                        
                                        

                                    @endif
                                    
                                @endforeach 
                        @endif

                        
                    @endforeach
                </div> 
                    
                @endif

            @endforeach
        
        {{-- </div>              --}}
        </div>

    </div>

</section>

        @endsection
        


        <script>
        function myFunction() {
        var x = document.getElementById("myDIV");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
        </script>

        <script src="../public/js/jquery-3.3.1.min.js"></script>
                <script src="../public/js/bootstrap.min.js"></script>
                <script src="../public/js/plugins.js"></script>
                <script src="../public/js/wow.min.js"></script>
                <script>new WOW().init();</script>

    </body>
</html>
