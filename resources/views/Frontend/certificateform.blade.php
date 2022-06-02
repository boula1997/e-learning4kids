@extends('Frontend.master')
<!DOCTYPE html>
  <html >
      <head>
          <meta charset="utf-8">
          <title>E-Learning for Kids</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          {{-- <link rel="icon" href="{{asset('images/icon2.jpg')}}" /> --}}
                <link rel='stylesheet'href ="{{asset('css/bootstrap.css')}}"/>
                  <link rel='stylesheet'href ="{{asset('css/font-awesome.min.css')}}"/>
                  <link rel='stylesheet'href ="{{asset('css/style.css')}}"/>
                  <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
                  <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>
                  <link rel='stylesheet'href ="{{asset('css/childview.css')}}"/>

                  
      </head>

      <body>
          @section('content')

                @foreach ($students as $student)
                @if ($student->user_id== $data['student_id'])

                <p hidden> {{$fname= $student->fname}}</p>
                <p hidden> {{$lname= $student->lname}}</p>
                    
                @endif
                @endforeach
                
                @foreach ($classrooms as $classroom)
                    @if ($classroom->classroom_id==$data['classroom_id'])
                      <p hidden> {{$classroom_id=$classroom->classroom_id}}</p>

                      {{-- to get course name  --}}

                        @foreach ($courses as $course)
                          @if ($course->course_id==$classroom->course_id)
                              <p hidden> {{$courseTitle=$course->title}}  </p>
                          @endif
                        @endforeach

                    @endif
                @endforeach


                @foreach ($studentregs as $studentregs)
                    @if ($studentregs->student_id== $data['student_id'])
                      @if ($studentregs->classroom_id== $data['classroom_id'])
                             
                        <p hidden>  {{$totalgrades= $studentregs->mid_term +$studentregs->final  }} <p>
                          
                          @if ($totalgrades>=50)

                                <!--Body-->
                                <div class="row" > 
                                  <div  class=" col-lg-12  col-md-12 col-sm-12 col-xm-12  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" style="height: 600px;" >
                                        <div style="display: flex;align-items: center; justify-content: center">
                                            <div class="container1" >
                                              <div class="logo">
                                                {{-- <img class="img1 img img-responsive" src="{{asset('images/photos/final.png')}}"> --}}
                                            </div>

                                            <div class="marquee">
                                                Certificate of Completion
                                            </div>

                                            <div class="assignment">
                                                This certificate is presented to
                                            </div>

                                            <div class="person">
                                                {{$fname}} {{$lname}}
                                            </div>

                                            <div class="reason">
                                                    Has sucessfully completed 
                                                <br> {{$courseTitle}} course
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                          @else 
                            <p class="marquee" style="text-align: center; margin-bottom: 20%;margin-top: 10%">
                                 Your certificate not available right now 
                            <br> Please check with your teacher </p>

                       
                              
                          @endif
                               


                        @endif  
                      @endif
                  @endforeach

                

          
                    {{-- <div  class=" col-lg-12  col-md-12 col-sm-12 col-xm-12  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" style="height: 530px;text-align: center" >
                    <p style="font-size: 50px; color: rgb(72, 72, 255)"><strong> Certificate</strong></p>
                    <p style="font-size: 30px;"> Presented To  </p>
                    <p style="font-size: 30px;"> {{$data['student_id'] }}  </p>
                    <p style="font-size: 20px;"> This is to certify that Ibrahim Samy has sucessfully 
                      <br>
                      completed name of the courseTitle  in online course.
                     
                    </p>
                      
  
                    </div> --}}


                  </div>
                    

                  </section>

          @endsection

                  
          
          <style type='text/css'>
            /* body, html {
                margin: 0;
                padding: 0;
            }
            body {
                
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            } */
            .container1 {
                border: 20px solid rgb(132, 171, 255);
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
                text-align: center;
                
            }
            .logo {
                
                width: 200px;
                height: 200px;
               margin-left: 35%
            }

            .marquee {
                color:rgb(132, 171, 255);
                font-size: 48px;
                margin: -15px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
        </style>

       </body>
       
</html>