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

</head>
<body>

    <!--Body-->
@section('content')
  <div class="container">
    <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="materials/{{Auth::user()->photo}}"  alt="Admin" class="img rounded-circle" width="150">
                <div class="mt-3">
                  <h4> {{Auth::user()->fname}} {{Auth::user()->lname}} </h4>
                  <p class="text-muted font-size-sm">{{Auth::user()->email}}</p>
                  {{-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> --}}
                  {{-- <button class="btn btn-primary">Follow</button>
                  <button class="btn btn-outline-primary">Message</button> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="card mt-3">

            <ul class="list-group list-group-flush">
              {{-- {{dd(Auth::user()->personality_type)}} --}}
              @if(Auth::guard('student')->user())
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  @if (Auth::user()->personality_type=="openness")
                    <div class="row" style="margin: 19px 0 0 12px;">
                      <p> Personality Type: Openness</p> 
                      <p class="description" style="font-size: 14px;">Known as curious and open to new ideas.</p>
                    </div>
                  @elseif(Auth::user()->personality_type=="consientiousness")
                    <div class="row" style="margin: 19px 0 0 12px;">
                      <p> Personality Type: Conscientiousness</p> 
                      <p class="description" style="font-size: 14px;">Known as organized and systematic. </p>
                    </div>
                  @elseif(Auth::user()->personality_type=="extraversion")
                    <div class="row" style="margin: 19px 0 0 12px;">
                      <p> Personality Type: Extraversion</p> 
                      <p class="description" style="font-size: 14px;">Known as being outgoing and enjoy social situations.</p>
                    </div>
                  @elseif(Auth::user()->personality_type=="agreeableness")
                    <div class="row" style="margin: 19px 0 0 12px;">
                      <p> Personality Type: Agreeableness</p> 
                      <p class="description" style="font-size: 14px;">Known as being tolerant and trusting.</p>
                    </div>
                  @elseif(Auth::user()->personality_type=="neuroticism")
                    <div class="row" style="margin: 19px 0 0 12px;">
                      <p> Personality Type: Neuroticism</p> 
                      <p class="description" style="font-size: 14px;">Known as being anxious and moody.</p>
                    </div>
                  @endif
              </li>
              @endif
              
              @if(Auth::guard('teacher')->user())
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <div class="row" style="margin: 19px 0 0 12px;">
                  <p> Personality Type: Openness</p> 
                  <p class="description" style="font-size: 14px;">Known as curious and open to new ideas.</p>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <div class="row" style="margin: 19px 0 0 12px;">
                  <p> Personality Type: Conscientiousness</p> 
                  <p class="description" style="font-size: 14px;">Known as organized and systematic. </p>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <div class="row" style="margin: 19px 0 0 12px;">
                  <p> Personality Type: Extraversion</p> 
                  <p class="description" style="font-size: 14px;">Known as being outgoing and enjoy social situations.</p>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <div class="row" style="margin: 19px 0 0 12px;">
                  <p> Personality Type: Agreeableness</p> 
                  <p class="description" style="font-size: 14px;">Known as being tolerant and trusting.</p>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <div class="row" style="margin: 19px 0 0 12px;">
                  <p> Personality Type: Neuroticism</p> 
                  <p class="description" style="font-size: 14px;">Known as being anxious and moody.</p>
                </div>
              </li>
              @endif

              @if(Auth::guard('parent')->user())
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <div class="row" style="margin: 19px 0 0 12px;">
                  <p> Personality Type: Openness</p> 
                  <p class="description" style="font-size: 14px;">Known as curious and open to new ideas.</p>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <div class="row" style="margin: 19px 0 0 12px;">
                  <p> Personality Type: Conscientiousness</p> 
                  <p class="description" style="font-size: 14px;">Known as organized and systematic. </p>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <div class="row" style="margin: 19px 0 0 12px;">
                  <p> Personality Type: Extraversion</p> 
                  <p class="description" style="font-size: 14px;">Known as being outgoing and enjoy social situations.</p>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <div class="row" style="margin: 19px 0 0 12px;">
                  <p> Personality Type: Agreeableness</p> 
                  <p class="description" style="font-size: 14px;">Known as being tolerant and trusting.</p>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <div class="row" style="margin: 19px 0 0 12px;">
                  <p> Personality Type: Neuroticism</p> 
                  <p class="description" style="font-size: 14px;">Known as being anxious and moody.</p>
                </div>
              </li>
              @endif
            </ul>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">First Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{Auth::user()->fname}}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Last Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{Auth::user()->lname}}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{Auth::user()->email}}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{Auth::user()->phone}}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{Auth::user()->address}}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info "  href="{{route('show.accountsetting')}}">Edit</a>
                </div>
              </div>
            </div>
          </div>

          @if (Auth::guard('student')->user())
          {{-- gamifications --}}
          <div class="row gutters-sm">
            {{-- certificate--}}
            @if (Auth::guard('student')->user() && Auth::guard('student')->user()->personality_type=="consientiousness" || Auth::guard('student')->user()->personality_type=="agreeableness" || Auth::guard('student')->user()->personality_type=="neuroticism")
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="d-flex align-items-center mb-3">Certificatees</h6>
                    {{-- ibrahim --}}
                    @foreach ($studentregs as $studentreg)
                      @if ($studentreg->student_id==Auth::user()->user_id)
                        <p hidden> {{$classroom_id=$studentreg->classroom_id}}</p>
                    
                        @foreach ($classrooms as $classroom)
                          @if ($classroom_id==$classroom->classroom_id)
                            <p hidden> {{$name= $classroom->title }}</p> 
                          @endif
                        @endforeach
                        <a href="{{route('show.certificate',['student_id'=>Auth::user()->user_id,'classroom_id'=>$studentreg->classroom_id])}}" class="stretched-link">{{$name}}</a>
                        <br>
                      @endif 
                    @endforeach
                  </div>
                </div>
              </div>
           @endif

            {{-- badges --}}
            @if (Auth::guard('student')->user() && Auth::guard('student')->user()->personality_type=="openness" || Auth::guard('student')->user()->personality_type=="agreeableness" || Auth::guard('student')->user()->personality_type=="extraversion")
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="d-flex align-items-center mb-3">Badges</h6>
                    {{-- ibrahim --}}
                    @foreach ($studentassignments as $studentassignment)
                        @if ($studentassignment->student_id==Auth::user()->user_id)
                      
                        <p hidden> {{$assignment_id=$studentassignment->assignment_id}}</p>
                        <p hidden> {{$assignmentgrade=$studentassignment->grade}}</p>
                        <p hidden> {{$assignmentclassroom_id=$studentassignment->classroom_id}}</p>
                        <p hidden> {{$assignmentlastupdate=$studentassignment->updated_at}}</p>

                        @foreach ($classrooms as $classroom)
                            @if ($classroom->classroom_id==$assignmentclassroom_id)
                                <p> <strong> {{$nameclassroom= $classroom->title }} </strong> </p>

                                @foreach ($teacherassignments as $teacherassignment)
                                    @if ($assignment_id==$teacherassignment->id)
                                    <p > {{$name= $teacherassignment->title }} </p>
                                    <p hidden> {{$points= $teacherassignment->points }} </p>
                                    <p hidden> {{$due= $teacherassignment->due }} </p>

                                    <p hidden > {{$badgelevel= ($assignmentgrade / $points) *100  }} </p>

                                    @if ($badgelevel < 25)
                                            @if ( $assignmentlastupdate <= $due  )
                                            <img {{--class="img img-responsive"--}} style="width: 30px; height: 30px; float: right; margin-top: -30px" src="{{asset('images/level1.jpeg')}}" alt="">
                                              
                                              @endif
                                            
                                        @elseif ( $badgelevel >= 25 && $badgelevel <50)
                                              
                                                  @if ( $assignmentlastupdate <= $due  )
                                                  <img {{--class="img img-responsive"--}} style="width: 30px; height: 30px; float: right; margin-top: -30px" src="{{asset('images/level2.jpeg')}}" alt="">  
                                                  @endif       
                                                                    
                                        @elseif ($badgelevel >=50  && $badgelevel < 75)

                                                  @if ($assignmentlastupdate <= $due )
                                                  <img {{--class="img img-responsive"--}} style="width: 30px; height: 30px; float: right; margin-top: -30px" src="{{asset('images/level3.jpeg')}}" alt="">  
                                                  @endif    
                                        @elseif ($badgelevel >= 75 && $badgelevel <= 100)
                                                  @if ( $assignmentlastupdate <= $due  )
                                                  <img {{--class="img img-responsive"--}} style="width: 30px; float: right; margin-top: -30px" src="{{asset('images/level4.jpeg')}}" alt="">
                                                      
                                                  @endif
                                          
                                    @endif                                    
                                    
                                    
                                    
                                        
                                    @endif
                                @endforeach
                                
                            @endif
                            
                        @endforeach    
                      
                      
                        
                      
                        
                        @endif 
                    @endforeach

                  
                  </div>
                </div>
              </div>
            @endif
           
            @if (Auth::guard('student')->user() && Auth::guard('student')->user()->personality_type=="openness" || Auth::guard('student')->user()->personality_type=="consientiousness" || Auth::guard('student')->user()->personality_type=="extraversion")
                {{-- progress bar --}}
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body" style="float:right">
                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                    @foreach ($studentregs as $studentreg)
                    @if ($studentreg->student_id==Auth::guard('student')->user()->user_id)
                    <small>{{$studentreg->classroom->title}}</small>
                    <div class="progress mb-3" style="height: 5px">
                      
                      @foreach ($studentassignments as $studentassignment)
                        @if ($studentassignment->assignment->classroom_id== $studentreg->classroom_id && $studentassignment->student_id==Auth::user()->user_id )
                            
                        {{$counter=$counter+1}}
                          
                        @endif
                        @endforeach
                            
              
                      @if ($studentreg->mid_term!==null && $studentreg->final!==null )
                      <div class="progress-bar bg-primary" role="progressbar" style="width: {{80+(($counter/10)*20)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">{{80+(($counter/10)*20)}}%</div> 
                      @elseif($studentreg->mid_term!==null )
                      <div class="progress-bar bg-primary" role="progressbar" style="width: {{30+(($counter/10)*20)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      @elseif($studentreg->final!==null)
                      <div class="progress-bar bg-primary" role="progressbar" style="width: {{50+(($counter/10)*20)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      @else
                      <div class="progress-bar bg-primary" role="progressbar" style="width: {{0+(($counter/10)*20)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      @endif
                    </div>
                    @endif
                    @endforeach
                  </div>
                </div>
              </div>
            @endif

            @if (Auth::guard('student')->user() && Auth::guard('student')->user()->personality_type=="neuroticism" )
              {{-- student rank --}}
              <div class="col-sm-6 mb-3">
                <div class="card h-100">

                  <div class="card-body" style="float:right">

                    <h6 class="d-flex align-items-center mb-3">Student rank</h6>
                    @foreach ($studentregs as $studentreg)
                    @if ($studentreg->student_id==Auth::guard('student')->user()->user_id )
                    <div>
                    <small>{{$studentreg->classroom->title}}</small>
                    @if ($studentreg->mid_term !== null && $studentreg->class_work !== null && $studentreg->final !== null )
                    @if (($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=95)
                    <small>Rank 1</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=90)
                    <small>Rank 2</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=85)
                    <small>Rank 3</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=80)
                    <small>Rank 4</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=75)
                    <small>Rank 5</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=70)
                    <small>Rank 6</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=65)
                    <small>Rank 7</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=60)
                    <small>Rank 8</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=55)
                    <small>Rank 9</small>  
                    @elseif(($studentreg->mid_term + $studentreg->final + $studentreg->class_work)>=50)
                    <small>Rank 10</small>  
                    @else
                    <small>Failed</small>  
                    @endif
                    @endif
                  </div>
                    @endif
                    @endforeach
                  </div>

                </div>
              </div>
            @endif

          </div>
          @endif

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