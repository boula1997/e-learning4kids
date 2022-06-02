@extends('Frontend.master')<!DOCTYPE html>
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
        <link rel='stylesheet'href="{{asset('css/student-join-classroom.css')}}"/>
</head>
<body>

    <!-- header -->
@section('content')
    <!--Body-->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col3">
            <label class="textstudent">Student </label>
        <br>
            <label class="textjoin">
                    <label>Join Classroom</label>
         </label>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col4">
            
            <div class="row">
                
            <form action="{{ route('contents.store') }}" method="POST">
                @csrf
                <div class="col-lg-12 col-sm-12 col5">

                    <input type="text" class="form-control form-control-user @error('classroom_code') is-invalid @enderror"
                        placeholder="Enter Classroom Code..."
                        id="classroom_code" name="classroom_code" value="{{ old('classroom_code') }}" required autofocus style="width:92%;margin: 0px 0px 0 15px;border-radius: 14px;height: 42px;">

                        @error('classroom_code')
                            <span class="alert-danger" role="alert">
                                {{ $message  }}
                            </span>
                        @enderror
                </div>

                <input type="hidden" name="student_id" value="{{Auth::guard('student')->user()->user_id}}">

                <div class="col-lg-12 col-sm-12 col10">
                <button type="submit" class="btn btn-primary" style="width: 100px;">Join</button>
                <button type="reset" class="btn btn-danger" style="width: 100px;">Cancel</button>
                {{-- <button   type="submit" class="buttons2" >Join</button> --}}
                {{-- <button class="buttons2" type="button">Cancel</button> --}}
                </div>
            </form>

            </div>

            <!-- <div class="row">

            </div> -->

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

</body>
</html>
