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
        <link rel='stylesheet'href="{{asset('css/registerAsStyle.css')}}"/>

</head>

<body>

<!-- header -->

@section('content')

     <div class="row">
        <div class="col-lg-12 col3">
            <div class="row">
                <div class="col-lg-6 col4 ">
                    <h2><b>Register As</b></h2>
                </div>
            </div>

            <div class="row">
                <!-- student -->
                <div class="col-lg-4 col5 ">
                    <a href="{{route('register/student')}}">
                        <img src="../public/images/student.jpg"  alt="">
                        <h4>Student</h4>
                    </a>
                </div>
                <!-- teacher -->
                <div class="col-lg-4 col6 ">
                    <a href="{{route('register/teacher')}}">
                        <img src="../public/images/teacher.jpg" alt="">
                        <h4>teacher</h4>
                    </a>
                </div>
                <!-- parent -->
                <div class="col-lg-4 col7 ">
                    <a href="{{route('register/parent')}}">
                        <img src="../public/images/parent.jpg" alt="">
                        <h4>Parent</h4>
                    </a>
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
