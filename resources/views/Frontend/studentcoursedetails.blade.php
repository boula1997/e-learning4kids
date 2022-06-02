
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
            <link rel='stylesheet'href="{{asset('css/questionairResultStyle.css')}}"/>
    </head>
    <body>


        @section('content')

       
            <!--Body-->
            {{-- <div class="row">

                     {{-- <p>  {{$student_id}} </p> --}}
                     {{-- <p>  {{$classroom_id}} </p> --}}
                     {{-- <p>  {{$teacherName}} </p> --}}
              

            {{-- </div> --}}

                @foreach ($students as $student)
                    @if ($student->user_id==$student_id)    
                    <p hidden > {{$studentfname= $student->fname }} </p>
                    <p hidden > {{$studentlname= $student->lname }} </p>
                
                    @endif
               @endforeach


                @foreach ($studentregs as $studentreg)
                    @if ($studentreg->classroom_id==$classroom_id ) 
                    @if ($studentreg->student_id==$student_id)
                    {{-- <p > {{$classroom_id }} </p>    
                    <p > {{$student_id}} </p>  --}}
                    <p hidden> {{ $studentmidterm = $studentreg->mid_term }} </p>
                    <p hidden> {{ $studentfinal   = $studentreg->final }} </p>
                    <p hidden> {{ $studentclasswork   = $studentreg->class_work }} </p>
                    <p hidden> {{ $rank= $studentreg->rank }} </p>
                    @endif
                    @endif
                @endforeach

              {{-- rank --}}
              @foreach ($studentregs as $studentreg)
              @if ($studentreg->student_id==$student_id) 
                @if ($studentreg->mid_term !== null && $studentreg->class_work !== null && $studentreg->final !== null )
                      @if (($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=95)
                          <small hidden>{{$rank='Rank 1'}}</small>  
                          @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=90)
                          <small hidden>{{$rank='Rank 2'}}</small>  
                          @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=85)
                          <small hidden>{{$rank='Rank 3'}}</small>  
                          @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=80)
                          <small hidden>{{$rank='Rank 4'}}</small>  
                          @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=75)
                          <small hidden>{{$rank='Rank 5'}}</small>  
                          @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=70)
                          <small hidden>{{$rank='Rank 6'}}</small>  
                          @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=65)
                          <small hidden> {{$rank='Rank 7'}}</small>  
                          @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=60)
                          <small hidden> {{$rank='Rank 8'}}</small>  
                          @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=55)
                          <small hidden>{{$rank='Rank 9'}}</small>  
                          @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=50)
                          <small hidden>{{'$rank=Rank 10'}}</small>  
                          @else
                          <small hidden>{{$rank='Failed'}}</small>  
                      @endif
                  @endif
               @endif
          @endforeach
              


            <section class="price_table text-center">
            <div class="container-fluid">
                {{-- <h1 >Enrollment courses  </h1> --}}
                <div class="row">
                       <!-- tabele -->
                       <table id="bigFive" style="width: 81%;margin: 10px 10%;">
                        <tr>
                          <th style="background:white;color: black;font-weight: normal; text-align: center">Student Name</th>
                          <th style="background:white;color: black;font-weight: normal; text-align: center"> {{$studentfname}}  {{$studentlname}}</th>
                        </tr>
                        <tr>
                          <td >Course Name</td>
                          <td> {{ $courseTitle}}</td>
                        </tr>
                        <tr>
                          <td>Teacher Name</td>
                          <td>Dr. {{$teacherName}} </td>
                        </tr>
                        <tr>
                          <td>Rank</td>
                            @if ($rank!=null)
                              <td>{{ $rank }}</td> 
                            @else
                              <td>N/A</td>
                            @endif
                        </tr>
                        <td>Mid-Term</td>
                          @if ($studentmidterm!=null)
                            <td>{{$studentmidterm}}</td> 
                          @else
                            <td>N/A</td>
                          @endif
                      </tr>
                        <tr>
                          <td>Final</td>
                            @if ($studentfinal!=null)
                              <td>{{$studentfinal}}</td> 
                            @else
                              <td>N/A</td>
                            @endif
                        </tr>

                        <tr>
                          <td>Class Work</td>
                            @if ($studentclasswork!=null)
                              <td>{{$studentclasswork}}</td> 
                            @else
                              <td>N/A</td>
                            @endif
                        </tr>
                        {{-- <tr> --}}

                      
                      </table>
                     
                </div>  

            </div>

        </section>

        @endsection


        <script src="../public/js/jquery-3.3.1.min.js"></script>
                <script src="../public/js/bootstrap.min.js"></script>
                <script src="../public/js/plugins.js"></script>
                <script src="../public/js/wow.min.js"></script>
                <script>new WOW().init();</script>

    </body>
</html>
