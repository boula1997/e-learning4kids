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
        <link rel="stylesheet" href="{{asset('css/profile.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/viewMember.css')}}"> --}}

</head>
<body>

    <!--Body-->
@section('content')
  <div class="container" style="height: 450px">
    <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body"> 
              @foreach ($StudentRegs as $studentRegs)
                @if ($studentRegs->classroom_id==$class_id)
                    @foreach ($students as $student)
                      @if ( $studentRegs->student_id==$student->user_id)
                      <div class="row"> 
                        <div class="col-sm-3">
                          <h6 class="mb-0">{{$student->fname}} {{$student->lname}}</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{$student->email}}
                        </div>
                      </div>
                      <hr>
                      @endif 
                    @endforeach
                @endif
              @endforeach
              
                




                
              
              {{-- <hr> --}}
              {{-- <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info "  href="{{route('show.accountsetting')}}">Edit</a>
                </div>
              </div> --}}
            </div>
          </div>

        </div>

        <div class="col-md-2">
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