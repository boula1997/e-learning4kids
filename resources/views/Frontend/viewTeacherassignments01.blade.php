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
    {{-- <link rel='stylesheet'href="{{asset('css/css/questionairResultStyle.css')}}"/> --}}
    <link rel='stylesheet'href="{{asset('css/questionairResultStyle.css')}}"/>
    {{-- <link rel='stylesheet'href="{{asset('css/questionairResultStyle.css')}}"/> --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
    <style>#bigFive th {
      padding-top: 2%;
      padding-bottom: 2%;
      text-align: left;
      background-color: #2073d9;
      color: white;
      
    }
    
    #bigFive td, #bigFive th {
    border: 0% solid #ddd;
    padding: 2%;
    font-size: 60%;
}

#bigFive th {
    padding-top: 4%;
    padding-bottom: 5%;
    text-align: left;
    background-color: #3071a9;
    color: white;
    font-size: 60%;
}
    
    
    </style>
</head>

<body>

<!-- header -->
@if (Auth::guard('student')->user())


@section('content')


    {{-- <p hidden>{{$max=max($personalTypes)}}</p> --}}
    <!-- body -->
     <div class="row">
        <div class="col-lg-12 col3">
            <div class="row">
                <!-- body -->
                <div class="col-lg-6 col4">
                    <p><strong>Dued Assignments</strong></p>
                    <!-- tabele -->
                    <table id="bigFive">
                        <tr >
                          <th class="col-md-3">Assignment Title</th>
                          <th class="col-md-3">Due</th>
                          <th class="col-md-3">Description</th>
                          <th class="col-md-3">Points</th>
                        </tr>
                       
                        @foreach ($teacherassignments as $teacherassignment )
                          @if ($teacherassignment->classroom_id==$classroom_id)
                          <tr>
                          <td><a href="{{route('show.Assignment', ['assignment_id' =>$teacherassignment->id , 'classroom_id' =>$teacherassignment->classroom_id ])}}">{{$teacherassignment->title}}</a> </td>
                            <td>{{date('d-F-Y  H:i' , strtotime($teacherassignment->due))}}</td>
                            <td>{{$teacherassignment->description}}</td>
                            <td>{{$teacherassignment->points}}</td>
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

    @else
    
    @section('content')


    {{-- <p hidden>{{$max=max($personalTypes)}}</p> --}}
    <!-- body -->
     <div class="row">
        <div class="col-lg-12 col3">
            <div class="row">
                <!-- body -->
                <div class="col-lg-6 col4">
                    <p><strong>Dued Assignments</strong></p>
                    <!-- tabele -->
                    <table id="bigFive">
                        <tr>
                          <th>Assignment Title</th>
                          <th>Due</th>
                          <th>Description</th>
                          <th>points</th>
                          <th>Action  </th>
                        </tr>
                       
                        @foreach ($teacherassignments as $teacherassignment )
                        @if ($teacherassignment->classroom_id==$classroom_id)
                        <tr>
                          <td><a href="{{route('show.Assignment', ['assignment_id' =>$teacherassignment->id , 'classroom_id' =>$teacherassignment->classroom_id ])}}">{{$teacherassignment->title}} </a></td>
                          <a href="{{route('show.Assignment', ['assignment_id' =>$teacherassignment->id , 'classroom_id' =>$teacherassignment->classroom_id ])}}"></a>
                          <td>{{date('d-F-Y  H:i' , strtotime($teacherassignment->due))}}</td>
                          <td>{{$teacherassignment->description}}</td>
                          <td>{{$teacherassignment->points}}</td>
                          <td><a href="{{route('view.addAssignment',['classroom_id'=>$teacherassignment->classroom_id, 'assignment_id'=>$teacherassignment])}}">edit</a>  <a href="{{route('delete.content', ['teacherassignment_id' =>$teacherassignment->id, 'classroom_id' =>$classroom_id])}}">Delete</a></td></td>
      

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
@endif
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
