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
    <link rel='stylesheet'href="{{asset('css/questionairResultStyle.css')}}"/>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
</head>

<body>

<!-- header -->

@section('content')


    {{-- <p hidden>{{$max=max($personalTypes)}}</p> --}}
    <!-- body -->
     <div class="row">
        <div class="col-lg-12 col3">
            <div class="row">
                <!-- body -->
                <div class="col-lg-6 col4">
                    <p><strong>Result</strong></p>
                    <!-- tabele -->
                    <table id="bigFive">
                        <tr>
                          <th>Course</th>
                          <th>Mid_term</th>
                          <th>Class_work</th>
                          <th>Final</th>
                        </tr>
                        @foreach ($studentregs as $studentreg)
                        @if ($studentreg->student_id==Auth::guard('student')->user()->user_id)
                        <tr>
                          <td>{{$studentreg->classroom->course->title}}</td>
                          <td>{{$studentreg->mid_term}}</td>
                          <td>{{$studentreg->class_work}}</td>
                          <td>{{$studentreg->final}}</td>
                        </tr>   
                        @endif
                        @endforeach

                      </table>
                    <!--end of table-->
                </div>
          </div>

        </div>

    </div>




    @endsection
     <!-- Footer -->

         <!--End Loading Screen-->

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>


</div>



</body>
</html>
