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
<link rel='stylesheet' href="{{asset('css/font-awesome.min.css')}}"   />
        <link rel='stylesheet'href ="{{asset('css/style.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>
        <link rel="stylesheet" href="{{asset('CSS/createClassroomStyle.css')}}"/>

</head>

<body>

<!-- header -->


@section('content')

<!-- body -->
<div class="row">
  <div class="col-lg-12 col3">
    <div class="col5">
      <!-- login -->

      <form
       action="{{ route('proucts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Course Title">
          @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong style="color: red">{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Course</label>
          <br>
          <select name="course_id" id="courses"  class="form-control" style="width: -webkit-fill-available;">
            @foreach ($courses as $course)
              <option value="{{$course->course_id}}" name="course_id">{{$course->title}} </option>  
            @endforeach
          </select>
        </div>
        <div class="form-group" >
          <input type="file" class="form-control" id="file" name="file" placeholder="Upload Image" style="outline: none !important;">
          {{-- <input type="file" class="form-control-file" name="file" id="exampleInputFile"> --}}
          
        </div>
         
        <div class="form-group" >
          <input type="hidden" class="form-control" id="1" name="teacher_id" value=" {{Auth::guard('teacher')->user()->user_id}}" placeholder="teacher_id">
        </div> 

         
        
        
        

        <button class="form-control btn btn-primary" type="submit">Add</button>
      </form>
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
