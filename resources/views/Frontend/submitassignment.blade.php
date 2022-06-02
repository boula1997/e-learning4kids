
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
            <link rel='stylesheet'href ="{{asset('css/childview.css')}}"/>
            <!-- MDB -->
            <link rel="stylesheet" href="{{asset('css/submitAssignemnt.css')}}">
            <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}"/> 
    </head>
    <body>

        {{-- {{dd($studentassignments->total())}} --}}
    
    @if (Auth::guard('student')->user())
    @foreach ($studentassignments as $studentassignment)
    @if ( $studentassignment->assignment_id==$assignment_id  &&  $studentassignment->student_id==Auth::guard('student')->user()->user_id)
    {{$flag=$flag+1}}
    @if ( $sudentassignment_id==null)   
    @section('content')    
        <div class="container" style="max-width: 1176px;margin-bottom: 182px;margin-top: 73px;">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card card-margin">
                        <div class="card-header no-border">
                            <h5 class="card-title"><strong>{{$studentassignment->assignment->title}}</strong></h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="widget-49-title-wrapper">
                                    <div class="widget-49-date-primary">
                                        <span class="widget-49-date-day">{{date('d', strtotime($studentassignment->assignment->updated_at))}}</span>
                                        <span class="widget-49-date-month">{{date('F', strtotime($studentassignment->assignment->updated_at))}}</span>
                                    </div>
                                    <div class="widget-49-meeting-info">
                                        <span class="widget-49-pro-title">Dr. {{$studentassignment->assignment->teacher->fname}} {{$studentassignment->assignment->teacher->lname}}</span>
                                        <span class="widget-49-meeting-time">Created at {{date('H:i', strtotime($studentassignment->assignment->updated_at))}}</span>
                                    </div>
                                </div>
                                <ol class="widget-49-meeting-points">
                                    <li class="widget-49-meeting-item"><span>Description</span></li>
                                    <li class="widget-49-meeting-item"><span>{{$studentassignment->assignment->description}}</span></li>
                                    {{-- <li class="widget-49-meeting-item"><span>Session timeout increase to 30 minutes</span></li> --}}
                                </ol>
                                <div class="widget-49-meeting-action">
                                    <a href="#" class="btn btn-sm btn-flash-border-primary">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-margin">
                        <div class="card-header no-border">
                            <h5 class="card-title"><strong>Submitted Assignemnt</strong></h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="widget-49-title-wrapper">
                                    <div class="widget-49-date-warning">
                                        <span class="widget-49-date-day">{{date('d', strtotime($studentassignment->updated_at))}}</span>
                                        <span class="widget-49-date-month">{{date('F', strtotime($studentassignment->updated_at))}}</span>
                                    </div>
                                    <div class="widget-49-meeting-info">
                                        <span class="widget-49-pro-title">Turned in</span>
                                        <span class="widget-49-meeting-time">At {{date('H:i', strtotime($studentassignment->updated_at))}}</span>
                                    </div>
                                </div>                                
                                <ol class="widget-49-meeting-points">
                                    <li class="widget-49-meeting-item"><span>Your grade is {{$studentassignment->grade}} out of {{$studentassignment->assignment->points}}</span></li>
                                    <li class="widget-49-meeting-item">
                                        <span>You Submission
                                            <a href="{{route('download.studentAssignment', ['assignment_id' =>$studentassignment->id])}}">{{$studentassignment->content}}</a>
                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="hidden" name="student_id" value="{{Auth::guard('student')->user()->user_id}}">
                                            <input type="hidden" name="assignment_id" value="{{$assignment_id}}">
                                        </span>                                  
                                    </li>
                                </ol>


                                <div class="widget-49-meeting-action">
                                    {{-- <a href="#" class="btn btn-sm btn-flash-border-warning">View All</a> --}}
                                    
                                    <a href="{{route('show.Assignment', ['sudentassignment_id' =>$studentassignment->id, 'assignment_id'=>$assignment_id, 'classroom_id' =>$studentassignment->classroom_id ])}}"><button  type="button"  class="btn btn-primary" style="margin:6px 10px 0 0; font-size: 12px; border-radius: 7px">Edit</button> </a>
                                    {{-- <a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}"><button type="button" class="btn btn-danger" style="font-size: 12px; border-radius: 7px">Cancel</button></a> --}}
                                    @if ($studentassignment->grade ==null)
                                    <a href="{{route('delete.content', ['studentassignment_id' =>$studentassignment->id, 'classroom_id' =>$classroom_id])}}"><button type="button" class="btn btn-danger" style="font-size: 12px; border-radius: 7px">Delete</button></a>
                                    @endif

                                    <a href="{{route('show.classroom', ['classroom_id' =>$classroom_id])}}"><button type="button" class="btn btn-primary" style="margin:6px 10px 0 0; font-size: 12px; border-radius: 7px">Back</button></a>
                                
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection 
    @else
    @section('content')    
    <div class="container" style="max-width: 1176px;margin-bottom: 182px;margin-top: 73px;">
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-margin">
                    <div class="card-header no-border">
                        <h5 class="card-title"><strong>{{$studentassignment->assignment->title}}</strong></h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49">
                            <div class="widget-49-title-wrapper">
                                <div class="widget-49-date-primary">
                                    <span class="widget-49-date-day">{{date('d', strtotime($studentassignment->assignment->updated_at))}}</span>
                                    <span class="widget-49-date-month">{{date('F', strtotime($studentassignment->assignment->updated_at))}}</span>
                                </div>
                                <div class="widget-49-meeting-info">
                                    <span class="widget-49-pro-title">Dr. {{$studentassignment->assignment->teacher->fname}} {{$studentassignment->assignment->teacher->lname}}</span>
                                    <span class="widget-49-meeting-time">Created at {{date('H:i', strtotime($studentassignment->assignment->updated_at))}}</span>
                                </div>
                            </div>
                            <ol class="widget-49-meeting-points">
                                <li class="widget-49-meeting-item"><span>Description</span></li>
                                <li class="widget-49-meeting-item"><span>{{$studentassignment->assignment->description}}</span></li>
                                {{-- <li class="widget-49-meeting-item"><span>Session timeout increase to 30 minutes</span></li> --}}
                            </ol>
                            <div class="widget-49-meeting-action">
                                <a href="#" class="btn btn-sm btn-flash-border-primary">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-margin">
                    <div class="card-header no-border">
                        <h5 class="card-title"><strong>Submitted Assignemnt</strong></h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49">
                            <div class="widget-49-title-wrapper">
                                <div class="widget-49-date-warning">
                                    <span class="widget-49-date-day">{{date('d', strtotime($studentassignment->updated_at))}}</span>
                                    <span class="widget-49-date-month">{{date('F', strtotime($studentassignment->updated_at))}}</span>
                                </div>
                                <div class="widget-49-meeting-info">
                                    <span class="widget-49-pro-title">Turned in</span>
                                    <span class="widget-49-meeting-time">At {{date('H:i', strtotime($studentassignment->updated_at))}}</span>
                                </div>
                            </div>                                
                            <ol class="widget-49-meeting-points">
                                <li class="widget-49-meeting-item"><span>Your grade is {{$studentassignment->grade}} out of {{$studentassignment->assignment->points}}</span></li>
                                <li class="widget-49-meeting-item">
                                    <span>You Submission
                                        <form action="{{route('update.content', ['classroom_id' =>$classroom_id, 'sudentassignment_id'=>$sudentassignment_id ])}}" method="post" enctype="multipart/form-data">                           
                                            @csrf
                                            <input type="file" class="form-control-file form-control form-control-user @error('content') is-invalid @enderror" name="file" id="exampleInputFile"  value="{{ old('content') }}" placeholder="upload file" autofocus style="outline:none !important;width: -webkit-fill-available;margin: 9px 0 0 50px;">
                                            @error('content')
                                                <span class="invalid-feedback" role="alert" style="margin: 7px 0 0 50px;">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="hidden" name="student_id" value="{{Auth::guard('student')->user()->user_id}}">
                                            <input type="hidden" name="assignment_id" value="{{$assignment_id}}">
                                            
                                            <div class="widget-49-meeting-action">
                                                <button  type="submit" class="btn btn-primary" style="margin-top: 10px; font-size: 12px; border-radius: 7px">Save</button>
                                                @if ($studentassignment->grade ==null)
                                                <a href="{{route('delete.content', ['studentassignment_id' =>$studentassignment->id, 'classroom_id' =>$classroom_id])}}"><button type="button" class="btn btn-danger" style="font-size: 12px; border-radius: 7px">Delete</button></a>
                                                @endif
                
                                                <a href="{{route('show.classroom', ['classroom_id' =>$classroom_id])}}"><button type="button" class="btn btn-primary" style="margin:6px 10px 0 0; font-size: 12px; border-radius: 7px">Back</button></a>
                                            </div>
                                            <!-- Cancel button -->
                                            {{-- <a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}"><button type="button"   class="btn btn-danger" style="margin-left: 20%;margin-top: 20px; font-size: 12px; border-radius: 7px">Cancel</button></a>--}}
                                        </form>
                                        <input type="hidden" name="student_id" value="{{Auth::guard('student')->user()->user_id}}">
                                        <input type="hidden" name="assignment_id" value="{{$assignment_id}}">
                                    </span>                                  
                                </li>
                            </ol>


                            <div class="widget-49-meeting-action">
                                {{-- <a href="#" class="btn btn-sm btn-flash-border-warning">View All</a> --}}
                                
                                
                                {{-- <a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}"><button type="button" class="btn btn-danger" style="font-size: 12px; border-radius: 7px">Cancel</button></a> --}}

                            
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
    @endif






 @endif
 @endforeach

  
    
    @if ($studentassignments->total()!=0 || $studentassignments->total()==0)
    @foreach ($teacherassignments as $teacherassignment)
    @if ($teacherassignment->id==$assignment_id)  
    @section('content')
        <div class="container" style="max-width: 1176px;margin-bottom: 182px;margin-top: 73px;">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card card-margin">
                        <div class="card-header no-border">
                            <h5 class="card-title"><strong>{{$teacherassignment->title}}</strong></h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="widget-49-title-wrapper">
                                    <div class="widget-49-date-primary">
                                        <span class="widget-49-date-day">{{date('d', strtotime($teacherassignment->updated_at))}}</span>
                                        <span class="widget-49-date-month">{{date('F', strtotime($teacherassignment->updated_at))}}</span>
                                    </div>
                                    <div class="widget-49-meeting-info">
                                        <span class="widget-49-pro-title">Dr. {{$teacherassignment->teacher->fname}} {{$teacherassignment->teacher->lname}}</span>
                                        <span class="widget-49-meeting-time">Created at {{date('H:i', strtotime($teacherassignment->updated_at))}}</span>
                                    </div>
                                </div>
                                <ol class="widget-49-meeting-points">
                                    <li class="widget-49-meeting-item"><span>Description</span></li>
                                    <li class="widget-49-meeting-item"><span>{{$teacherassignment->description}}</span></li>
                                    <a href="{{route('download.teacherAssignment', ['tassignment_id' =>$teacherassignment->id])}}"> <li class="widget-49-meeting-item"><span>{{$teacherassignment->content}}</span></li></a>
                                </ol>
                                <div class="widget-49-meeting-action">
                                    <a href="#" class="btn btn-sm btn-flash-border-primary">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-margin">
                        <div class="card-header no-border">
                            <h5 class="card-title">Submit Assignemnt</h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="widget-49-title-wrapper">
                                    <div class="widget-49-date-warning">
                                        <span class="widget-49-date-day">{{date('d', strtotime($teacherassignment->due))}}</span>
                                        <span class="widget-49-date-month">{{date('F', strtotime($teacherassignment->due))}}</span>
                                    </div>
                                    <div class="widget-49-meeting-info">
                                        <span class="widget-49-pro-title">Turn in</span>
                                        <span class="widget-49-meeting-time">before {{date('H:i', strtotime($teacherassignment->due))}}</span>
                                    </div>
                                </div>     
                                <form action="{{route('submit.assignment', ['classroom_id' =>$classroom_id ])}}" method="post" enctype="multipart/form-data">                           
                                    @csrf
                                    <input type="file" class="form-control-file form-control form-control-user @error('content') is-invalid @enderror" name="content" id="exampleInputFile"  value="{{ old('content') }}" placeholder="upload file" autofocus style="outline:none !important;width: -webkit-fill-available;margin: 9px 0 0 50px;">
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color: red">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="hidden" name="student_id" value="{{Auth::guard('student')->user()->user_id}}">
                                    <input type="hidden" name="assignment_id" value="{{$assignment_id}}">
                                    
                                    <div class="widget-49-meeting-action">
                                        <button  type="submit" class="btn btn-primary" style="margin-top: 10px; font-size: 12px; border-radius: 7px">Submit</button>
                                    </div>
                                    <!-- Cancel button -->
                                    {{-- <a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}"><button type="button"   class="btn btn-danger" style="margin-left: 20%;margin-top: 20px; font-size: 12px; border-radius: 7px">Cancel</button></a>--}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
    @endif
    @endforeach
    @endif
    @else
{{-- here --}}

@foreach ($teacherassignments as $teacherassignment)
@if ($teacherassignment->id==$assignment_id)  
@section('content')
    <div class="container" style="max-width: 1176px;margin-bottom: 182px;margin-top: 73px;">
        <div class="row">


            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <div class="card card-margin">
                    <div class="card-header no-border">
                        <h5 class="card-title"><strong>{{$teacherassignment->title}}</strong></h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49">
                            <div class="widget-49-title-wrapper">
                                <div class="widget-49-date-primary">
                                    <span class="widget-49-date-day">{{date('d', strtotime($teacherassignment->updated_at))}}</span>
                                    <span class="widget-49-date-month">{{date('F', strtotime($teacherassignment->updated_at))}}</span>
                                </div>
                                <div class="widget-49-meeting-info">
                                    <span class="widget-49-pro-title">Dr. {{$teacherassignment->teacher->fname}} {{$teacherassignment->teacher->lname}}</span>
                                    <span class="widget-49-meeting-time">Created at {{date('H:i', strtotime($teacherassignment->updated_at))}}</span>
                                </div>
                            </div>
                            <ol class="widget-49-meeting-points">
                                <li class="widget-49-meeting-item"><span>Description</span></li>
                                <li class="widget-49-meeting-item"><span>{{$teacherassignment->description}}</span></li>
                                <a href="{{route('download.teacherAssignment', ['tassignment_id' =>$teacherassignment->id])}}"> <li class="widget-49-meeting-item"><span>{{$teacherassignment->content}}</span></li></a>
                            </ol>
                            <div class="widget-49-meeting-action">
                                <a href="{{route('view.addAssignment',['classroom_id'=>$teacherassignment->classroom_id, 'assignment_id'=>$teacherassignment])}}" class="btn btn-primary btn-flash-border-primary" style="width: 110px;font-size: small;">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
            </div>

        </div>
    </div>


@endsection
@endif
@endforeach








    @endif

    

        

      
  

      
<script src="../public/js/jquery-3.3.1.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/plugins.js"></script>
<script src="../public/js/wow.min.js"></script>
<script>new WOW().init();</script>
    <!-- MDB -->
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

    </body>
</html>
