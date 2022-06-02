@extends('Frontend.master')


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>E-Learning for Kids</title>

    {{-- <link rel="icon" href="{{asset('images/icon2.jpg')}}" /> --}}
    <link rel='stylesheet'href ="{{asset('css/bootstrap.css')}}"/>
    <link rel='stylesheet'href ="{{asset('css/font-awesome.min.css')}}"/>
    <link rel='stylesheet'href ="{{asset('css/style.css')}}"/>
    <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
    <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>
    <link rel='stylesheet'href="{{asset('css/teacher.css')}}"/>
</head>
<body>

<!-- header -->
@section('content')
    <div class="row">
      <div class="col-lg-8 col3">
      <img src="{{asset('images/3.jpeg')}}" class="img img-responsive" alt="">
      </div>

      <div class="col-lg-4 col4">
        
        {{-- <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('Dashboard') }}</div>
      
                      <div class="card-body">
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif
      
                          {{ __('You are logged in!') }}
                      </div>
                  </div>
              </div>
          </div>
        </div> --}}
        
       


        <h2>Teacher Dashboard</h2>
        {{-- <p>Hello ,{{session()->get('email')}}</p> --}}
        <p hidden>{{Auth::guard('teacher')->user()->user_id}}</p>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        {{ __('You are logged in!') }}
        <p>Learning System for kids is an education via the Internet, network, or standalone computer.
          It is an online platform where students can learn,
           teachers can create contents and Parents can monitor their children</p>

           <a href="{{ asset('#classroom') }}"> <button type="button" class="btn btn-primary" >View Classrooms</button></a>
           <a href="{{ route('createClassroom') }}"> <button type="button" class="btn btn-info" >Create Classroom</button></a>


      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col7" id='classroom'>
        <h1>Enrolled Classrooms</h1>
      </div>
  </div>


  <section class="price_table text-center">
    <div class="container-fluid">
      <div class="row">

        @foreach ($classrooms as $classroom)
            
          @if ($classroom->teacher_id==Auth::guard('teacher')->user()->user_id)
            <div class="col-md-4 col-sm-6 col-xm-12">
              <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">
                <div class="img">
                  <img  class="center-block" src="materials/{{$classroom->content}}" width="130" height="200" alt="img">
                </div>
                <ul class="info list-unstyled">
                  {{-- <li >{{$classroom->classroom_id}}</li> --}}
                  <li id="myInput">{{$classroom->title}}</li>
                  <li class="center-text" style="margin: 0 35px;"></li>
                  <li> Class Code: {{$classroom->classroom_code}}</li>



                  
                  <a href="{{route('show.classroom', ['classroom_id' => $classroom->classroom_id])}}" >Open</a>
                  <a href="{{route('delete.content', ['classroom_id' => $classroom->classroom_id])}}" style="background-color: red;     margin-top: 2%;"> Delete </a>
                </ul>
                
                <script>
                  // The function below will start the confirmation dialog
                  function confirmAction() {
                    let confirmAction = confirm("Are you sure to execute this action?");
                    if (confirmAction) {
                      alert("Action successfully executed");
                    } else {
                      alert("Action canceled");
                    }
                  }
                </script>
              </div>
            </div>
              

          @endif

        @endforeach
      </div>
    </div>

  </section>





@endsection



         <!--End Loading Screen-->

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>

</body>
</html>
