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

                    <!--end of table-->
                </div>
          </div>

        </div>

    </div>

    {{-- <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src=".../100px200/" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src=".../100px200/" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src=".../100px200/" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div> --}}


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
