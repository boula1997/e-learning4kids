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
    {{-- <link rel='stylesheet'href="{{asset('css/cards.css')}}"/> --}}

    {{-- <link rel='stylesheet'href="{{asset('css/app.css')}}"/> --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
</head>

<body>

<!-- header -->
@section('content')

    <!-- body -->
    
     <div class="row" style="height: 682px;">
        <div class="col-lg-12 col3">
            <div class="row">
                <!-- body -->
                <div class="col-lg-6 col4">
                    <p><strong>Submited Assignments</strong></p>
                    <!-- tabele -->
                    <table id="bigFive">
                        <tr>
                          <th>student name</th>
                          <th>Assignment Title</th>
                          <th>Download</th>
                          <th>Grade</th>
                          <th>Actions</th>
                        </tr>

                        @foreach ($studentassignments as $studentassignment )
                        @if ($studentassignment->classroom_id==$classroom_id)
                          <tr>
                            
                            <td>{{$studentassignment->student->fname}} {{$studentassignment->student->lname}}</td>
                            <td>{{$studentassignment->assignment->title}}</td>
                            <td><a href="{{route('download.studentAssignment', ['assignment_id' =>$studentassignment->id])}}">{{$studentassignment->content}}</a></td>
                            <td>{{$studentassignment->grade}}</td>
                            <td><a href="{{route('edit.grade', ['assignment_id' =>$studentassignment->id])}}">Edit grade</a></td>
        

                          </tr>   
                        @endif
                      @endforeach

                      </table>  
                </div>
          </div>

        </div>

    </div>
@endsection

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>



</body>
</html>
