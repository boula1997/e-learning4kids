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
@if (Auth::guard('student')->user())
@section('content')

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
                          <th>Points</th>
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
                </div>
          </div>

        </div>

    </div>
@endsection

@else
 
@section('content')
@section('content')

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
                      <th>Points</th>
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
            </div>
      </div>

    </div>

</div>
@endsection
     <!-- Footer -->

         <!--End Loading Screen-->
@endif
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>



</body>
</html>
