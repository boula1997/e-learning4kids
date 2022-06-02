@extends('Frontend.master')
<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>E-Learning4Kids</title>

        {{-- <link rel="icon" href="{{asset('images/icon2.jpg')}}" /> --}}
        <link rel='stylesheet'href ="{{asset('css/bootstrap.css')}}"/>
        <link rel='stylesheet'href ="{{asset('css/font-awesome.min.css')}}"/>
        <link rel='stylesheet'href ="{{asset('css/style.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/student.css')}}"/>
</head>
<body>

    <!--Body-->
@section('content')
    <div class="row">
      <div class="col-lg-8 col3">
      <img class="img img-responsive" src="{{asset('images/3.jpeg')}}" alt="">
      </div>

      <div class="col-lg-4 col4">
        <h1>Student</h1>
        <p>Learning System for kids is an education via the Internet, network, or standalone computer. 
          It is an online platform where students can learn,
           teachers can create contents and Parents can monitor their children</p>
        <a href="{{ route('studentJoin') }}"> <button type="button" class="btn btn-primary" >Join Classroom</button></a>
        {{-- <a href="{{ route('sendEmail') }}"> <button type="button" class="btn btn-primary" >sendEmail</button></a> --}}
        
        <a href="{{ route('show.result') }}"> <button type="button" class="btn btn-info">Show results</button></a>
        {{-- @isset($message)
        <p>{{$message}}</p>
        @endisset --}}
        
        {{-- <button type="button" class="btn btn-outline-primary">Create favorite folders</button> --}}
        
        {{-- <script>
          function mm() {
            var date = new Date();
              if (date.getDate() === 1  && date.getHours() === 22 && date.getMinutes === 13) {
                  window.location.href = "{{URL::to('sendEmail')}";
              }
            }
        </script> --}}
      </div>
    </div>


    <div class="row">
      <div class="col-lg-12 col7">
        <h1>Courses</h1>
      </div>
    </div>



  <section class="price_table text-center">
    <div class="row">
      @foreach ($studentregs as $studentreg)
        @if ($studentreg->student_id==Auth::guard('student')->user()->user_id)
          <div class="col-md-4 col-sm-6 col-xm-12">
            <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">
              <div class="img">
                <img  class="center-block" src="materials/{{$studentreg->classroom->content}}" width="130" height="200" alt="img">
              </div>
              <ul class="info list-unstyled">
                <li>{{$studentreg->classroom->title}}</li>
                {{-- <li >{{$studentreg->classroom_id}}</li> --}}
                <li class="right-text"></li>
                <li>Mr. {{$studentreg->classroom->teacher->fname}} {{$studentreg->classroom->teacher->lname}}</li>
                <input type="hidden" name="classroom_id" value="{{$studentreg->classroom_id}}">
                <a href="{{route('show.classroom', ['classroom_id' => $studentreg->classroom_id])}}">Open</a>
              </ul>
            </div>	
          </div> 
     
        @endif
      @endforeach 
    </div>
  </section> 
@endsection

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>
    
</body>
</html>