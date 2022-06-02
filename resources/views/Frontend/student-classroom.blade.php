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
    <link rel='stylesheet'href="{{asset('css/Student-classroom.css')}}"/>

    <link rel='stylesheet'href="{{asset('css/file.css')}}"/>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
    body {
        background: #eee;
        font-size: 150%;
    }
    
    .date {
        font-size: 11px
    }
    
    .comment-text {
        font-size: 12px
    }
    
    .fs-12 {
        font-size: 12px
    }
    
    .shadow-none {
        box-shadow: none
    }
    
    .name {
        color: #007bff
    }
    
    .cursor:hover {
        color: blue
    }
    
    .cursor {
        cursor: pointer
    }
    
    .textarea {
        resize: none
    }
    
    .fa-facebook {
        color: #3b5999
    }
    
    .fa-twitter {
        color: #55acee
    }
    
    .fa-linkedin {
        color: #0077B5
    }
    
    .fa-instagram {
        color: #e4405f
    }
    
    .fa-dribbble {
        color: #ea4c89
    }
    
    .fa-pinterest {
        color: #bd081c
    }
    
    .fa {
        cursor: pointer
    }
    </style>
</head>

<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
<!-- header -->
@section('content')
<!--Body-->

@if (Auth::guard('student')->user())
    {{-- student --}}
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col3" >
            <img class="img1 img img-responsive" src="{{asset('images/studentclassroom.png')}}">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-6 courseTitle">
            @foreach ($classrooms as $classroom)           
                @if ($classroom->classroom_id==$classroom_id)
                    <h4>{{$classroom->title}}</h4>
                @endif
            @endforeach
        </div>
    </div>  
        
    </div>
    {{-- <div class="row" style=""></div> --}}
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="hidediv">
                <ul class="list-group" style="box-shadow: 1px 3px 16px 5px rgb(0 0 0 / 16%);">
                    <li class="list-group-item"><a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}">Submit assignment<hr style="margin-top: 1rem;"></a></li>
                    {{-- <li class="list-group-item">Materials<hr></li> --}}
                    {{-- $classroom_id --}}
                    <li class="list-group-item"><a href="{{route('showAllMemebers', ['class_id'=>$classroom_id])}}">Members</a><hr></li>
                    <li class="list-group-item">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="font-size: 11px;">View Other Classrooms
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                @foreach ($studentregs as $studentreg)
                                    @if ($studentreg->student_id==Auth::guard('student')->user()->user_id)       
                                        {{-- <li>{{$studentreg->classroom->teacher->fname}}</li> --}}
                                        {{-- <input type="hidden" name="classroom_id" value="{{$studentreg->classroom_id}}"> --}} 
                                        <li><a href="{{route('show.classroom', ['classroom_id' => $studentreg->classroom_id])}}">{{$studentreg->classroom->title}}</a></li>
                                            
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="showdiv">
                <ul class="list-group" style="box-shadow: 1px 3px 16px 5px rgb(0 0 0 / 16%);">
                    <li class="list-group-item" style="float: left;">                   
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" style="color:#007bff;font-size: 12px;" type="button" data-toggle="dropdown">Classroom List
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li class="list-group-item"><a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}">Submit assignment<hr style="margin-top: 1rem;"></a></li>
                                <li class="list-group-item"><a href="{{route('showAllMemebers', ['class_id'=>$classroom_id])}}">Members</a><hr></li>
                            </ul>
                        </div>                       
                    </li>
                </ul>
            </div>
            
            <div class="col-md-8" style="margin:-4px 0 0 -3px;">
                <div class="d-flex flex-column comment-section" id="myGroup">
                    <div class="bg-white p-2" style="height: 181px;box-shadow: 1px 3px 16px 5px rgb(0 0 0 / 16%);">
                        <form action="{{asset('post')}}" method="POST" enctype="multipart/form-data">
                            @csrf 
                        <div class="mt-2">
                            <div  class="bg-light p-2" data-parent="#myGroup" style="height: 159px;">
                                <textarea name="post" class="form-control ml-1 shadow-none textarea" placeholder=" Insert your post...." style="height: 45px;margin-top: 17px;font-size: 12px;"></textarea> 
                                <input type="hidden" name="student_id" value="{{Auth::guard('student')->user()->user_id}}">
                                <input type="hidden" name="classroom_id" value="{{$classroom_id}}">
                                
                                {{-- <input type="file" class="form-control-file" style="width: 294px;margin-top: 6px;" name="file" id="exampleInputFile" >
                                 --}}
                                <div class="mt-2 text-right">
                                    <input type="file" class="form-control-file" style="margin: 20px 0px -27px 5px;" name="file" id="exampleInputFile" >                                
                                    <button class="btn btn-primary btn-sm shadow-none" type="submit"  style="height: 29px;    width: 18%;font-size: small;">Post</button>
                                    <button class="btn btn-danger btn-sm shadow-none" type="reset"  style="height: 29px;    width: 18%; font-size: small;">Cancel</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>            
                </div>
            </div>
        </div>
    </div>
@foreach ($studentposts as $studentpost)
@if ($studentpost->classroom_id==$classroom_id)
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8" style="margin-bottom: 22px">
            <div class="d-flex flex-column comment-section" id="myGroup">
                <div class="bg-white p-2">
                    <div class="d-flex flex-row user-info"><img class="rounded-circle" src="materials/{{$studentpost->student_id !== null ? $studentpost->student->photo :$studentpost->teacher->photo }}"  width="40">
                        {{-- <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40"> --}}
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">{{$studentpost->student_id !== null ? $studentpost->student->fname :$studentpost->teacher->fname }} {{ $studentpost->student_id !== null ? $studentpost->student->lname : $studentpost->teacher->lname}}</span><span class="date text-black-50">Shared publicly &nbsp;{{date('F-d', strtotime($studentpost->updated_at))}} &nbsp;{{date('H:i', strtotime($studentpost->updated_at))}}</span></div>
                        
                        @if ($studentpost->student_id==Auth::user()->user_id || $studentpost->teacher_id==Auth::user()->user_id) 
                        <div class="dropdown" style="margin-left: auto;margin: 0 38px 25px 12px 20px;margin-right: 12px;margin-top: 11px;">
                            <i class="fa fa-ellipsis-v" data-toggle="dropdown" style="font-size:24px;color:#007bff;">
                            </i>
                            <ul class="dropdown-menu">
                                {{-- <li><a href="{{route('show.profileDetails')}}"><i class="fa fa-user-o"></i> Profile</a></li> --}}
                                <li><a href="{{route('show.classroom',['classroom_id'=>$studentpost->classroom_id,'post_id'=>$studentpost->id])}}" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>
                                <li><a href="{{route('delete.content', ['post_id' => $studentpost->id])}}">Delete Post</a></li>
                            </ul>
                        </div>
                        @endif
                    
                    </div>
                    
                            
                    
                    <div class="mt-2">
                        @if ($post_id==null)
                            <p class="comment-text" style="font-size: 13px;margin: 12px 0 5px 43px;">{{$studentpost->post}}</p>
                       
                        @elseif($studentpost->id==$post_id)
                        <form action="{{route('update.content',['classroom_id'=>$studentpost->classroom_id, 'post_id'=>$studentpost->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <textarea name="post" class="form-control ml-1 shadow-none textarea" placeholder=" Student announce...." style="height: 45px;margin-top: 17px;font-size: 12px;">{{$studentpost->post}}</textarea>
                            {{-- <input type="text" name="post" value="{{$studentpost->post}}"> --}}
                            {{-- <input type="file" class="form-control-file" style="width: 294px;margin-top: 6px;" name="file" id="exampleInputFile" > 
                             --}}

                             <div class="mt-2 text-right">
                                <input type="file" class="form-control-file" style="margin: 20px 0px -27px 5px;" name="file" id="exampleInputFile" >                                
                                <button class="btn btn-primary btn-sm shadow-none" type="submit"  style="height: 29px;width: 110px;font-size: small;">Edit</button>
                                <a href="{{route('show.classroom',['classroom_id'=>$studentpost->classroom_id])}}"><button class="btn btn-danger btn-sm shadow-none" type="button"  style="height: 29px;width: 110px;font-size: small;">Cancel</button></a>
                           
                            </div>
                            {{-- <button class="btn btn-primary btn-sm shadow-none" type="submit"  style="height: 29px;width: 110px;font-size: small;">Edit</button> --}}
                       </form>
                        @else
                        <p class="comment-text" style="font-size: 13px;margin: 12px 0 5px 43px;">{{$studentpost->post}}</p> 
                        @endif
                        {{-- <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                    </div>

                    <div class="mt-2">
                        <p class="comment-text" style="font-size: 13px;margin: 12px 0 5px 43px;"><a href="{{route('download.post', ['post_id' =>$studentpost->id])}}">{{$studentpost->content}}</a></p>
                    </div>
                </div>
                
                @foreach($comments as $comment)
                @if ($comment->post_id==$studentpost->id)
                
                 <p hidden>{{$counter=$counter+1}}</p>
                @endif
                @endforeach

                <div class="bg-white p-2">
                    <div class="d-flex flex-row fs-12">
                        <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                        <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-5" href="#collapse-{{$studentpost->id}}">{{$counter}}<i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
                        
                    </div>
                </div>
                
               
                {{-- @if ($studentpost->content!=null)
                    <img height="50px" width="50px" src="materials/{{$studentpost->content}}" alt="">
                @endif --}}
            @foreach($comments as $comment)
                @if ($comment->post_id==$studentpost->id)
 
                    <div id="collapse-{{$studentpost->id}}" class="bg-light p-2 collapse" data-parent="#myGroup">                                                                                       
                        <div class="d-flex flex-row align-items-start"><img class="rounded-circle" src="materials/{{$comment->student_id !== null ? $comment->student->photo :$comment->teacher->photo}}"width="35" height="32">
                        {{-- name and date --}}
                        <div class="d-flex flex-column justify-content-start ml-2">
                            <span class="d-block font-weight-bold name" style="font-size: 12px;">{{$comment->student_id !== null ? $comment->student->fname :$comment->teacher->fname }} {{ $comment->student_id !== null ? $comment->student->lname : $comment->teacher->lname}}
                                <span class="date text-black-50" style="font-size: 8px;margin: 0 4px 0 2px;margin: 0 4px 0 2px;">Shared publicly &nbsp;{{date('F-d', strtotime($comment->updated_at))}} &nbsp;{{date('H:i', strtotime($comment->updated_at))}}</span>
                                
                                @if ($comment->student_id==Auth::user()->user_id || $comment->teacher_id==Auth::user()->user_id)
                                    <div class="dropdown" style="padding: 0 0 0 217px;margin-top: -16px;">
                                        <i class="fa fa-cog" aria-hidden="true" data-toggle="dropdown" style="font-size:18px;color:#007bff;"></i>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('show.classroom',['classroom_id'=>$comment->post->classroom_id,'comment_id'=>$comment->comment_id])}}" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>
                                            <li><a href="{{route('delete.content', ['comment_id' =>$comment->comment_id])}}" >Delete Post</a></li>
                                        </ul>
                                    </div>
                                @endif
                            
                            </span>
                        </div>
                        </div>
                        {{-- comments --}}
                        <div class="mt-2">
                            @if ($comment_id==null)
                            <p class="comment-text" style="font-size: 13px;margin: 12px 0 5px 43px;">{{$comment->comments}}</p>
                            
                            @elseif($comment->comment_id==$comment_id)
                            <form action="{{route('update.content',['classroom_id'=>$comment->post->classroom_id, 'comment_id'=>$comment->comment_id])}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <textarea name="comment" class="form-control ml-1 shadow-none textarea" placeholder="" style="height: 45px;margin-top: 17px;font-size: 12px;">{{$comment->comments}}</textarea>


                                <div class="mt-2 text-right">
                                    <input type="file" class="form-control-file" style="margin: 20px 0px -27px 5px;" name="file" id="exampleInputFile" >                                
                                    <button class="btn btn-primary btn-sm shadow-none" type="submit"  style="height: 29px;width: 110px;font-size: small;">Edit</button>
                                    <a href="{{route('show.classroom',['classroom_id'=>$studentpost->classroom_id])}}"><button class="btn btn-danger btn-sm shadow-none" type="button"  style="height: 29px;width: 110px;font-size: small;">Cancel</button></a>
                            
                                </div>
                            {{-- <input type="text" name="comment" value="{{$comment->comments}}"> --}}
                            {{-- <input type="file" class="form-control-file" style="width: 294px;margin-top: 6px;" name="file" id="exampleInputFile" >  --}}
                            {{-- <button class="btn btn-primary btn-sm shadow-none" type="submit"  style="height: 29px;width: 110px;font-size: small;">Edit</button> --}}
                           </form>
                            @else
                            <p class="comment-text" style="font-size: 13px;margin: 12px 0 5px 43px;">{{$comment->comments}}</p> 
                            @endif
                        </div>

                        <div class="mt-2">
                            <p class="comment-text" style="font-size: 13px;margin: 12px 0 5px 43px;"><a href="{{route('download.post', ['comment_id' =>$comment->comment_id])}}">{{$comment->content}}</a></p>
                        </div>
                        <hr>
                    </div>

                    {{-- @if ($comment->content!=null)
                        <img height="50px" width="50px" src="materials/{{$comment->content}}" alt="">
                    @endif --}}
                @endif
            @endforeach 

                <form action="{{route('post.comment')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div id="collapse-{{$studentpost->id}}" class="bg-light p-2 collapse" data-parent="#myGroup">
                        <div class="d-flex flex-row align-items-start"><img class="rounded-circle" src="materials/{{$studentpost->student_id !== null ? $studentpost->student->photo :$studentpost->teacher->photo }}"  width="35" height="32">
                            <textarea name="comments" class="form-control ml-1 shadow-none textarea" style="font-size: 12px;" ></textarea> 
                            <input type="file" class="form-control-file" style="width: 294px;margin-top: 6px;" name="file" id="exampleInputFile">
                        </div>
                            
                        <input type="hidden" name="post_id" value="{{$studentpost->id}}">
                        <input type="hidden" name="classroom_id" value="{{$classroom_id}}">
                        <input type="hidden" name="student_id" value="{{Auth::guard('student')->user()->user_id}}">
                        <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="submit"  style="height: 29px;width: 110px;font-size: small;">Comment</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endif
@endforeach
@endsection
<!-- Footer -->
<!--End Loading Screen-->
 <script src="../public/js/jquery-3.3.1.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/plugins.js"></script>
<script src="../public/js/wow.min.js"></script>
<script>new WOW().init();</script>

@else {{-- if you are a teacher --}}
        

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col3">
            <img class="img1 img img-responsive" src="{{asset('images/studentclassroom.png')}}">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-6 courseTitle">
            @foreach ($classrooms as $classroom)           
                @if ($classroom->classroom_id==$classroom_id)
                    <p>{{$classroom->title}}</p>
                @endif
            @endforeach
        </div>
    </div>

 
    {{-- make post for teacher --}}


    
    {{-- <div class="row" style="width: 11px;background-color: black;">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span><div class="dropdown">
            <button class="btn dropdown-toggle" style="color:#007bff;font-size: 12px;" type="button" data-toggle="dropdown">View Other Classrooms
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
                @foreach ($classrooms as $classroom)
                    @if ($classroom->teacher_id==Auth::guard('teacher')->user()->user_id)       
                        <li><a href="{{route('show.classroom', ['classroom_id' =>  $classroom->classroom_id])}}">{{ $classroom->title}}</a></li>     
                    @endif
                @endforeach
            </ul>
        </div>
    </span>   
    </div> --}}
    {{-- <div class="container mt-6">
       <span><a href="{{route('view.addAssignment', ['classroom_id' =>$classroom_id])}}">Add assignment</a></span>
       <span><a href="{{route('show.studentAssignment', ['classroom_id' =>$classroom_id])}}">Grade assignment</a></span>
       <span><a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}">View assignments</a></span>
       <span><a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}">View assignments</a></span>
       <span><a href="{{route('showAllMemebers', ['class_id'=>$classroom_id])}}">Members</a></span>
       <span><a href="{{route('add.result', ['classroom_id' =>$classroom_id])}}">Grade exams</a></span>
        </div> --}}
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="hidediv">
                <ul class="list-group" style="box-shadow: 1px 3px 16px 5px rgb(0 0 0 / 16%);">
                    <li class="list-group-item"><a href="{{route('view.addAssignment', ['classroom_id' =>$classroom_id])}}">Add assignment</a></li>
                    <li class="list-group-item"><a href="{{route('show.studentAssignment', ['classroom_id' =>$classroom_id])}}">Grade assignment</a></li>
                    <li class="list-group-item"><a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}">View assignments</a></li>
                    <li class="list-group-item"><a href="{{route('showAllMemebers', ['class_id'=>$classroom_id])}}">Members</a><hr></li>
                    {{-- <li class="list-group-item">View All<hr></li> --}}
                    <li class="list-group-item"><a href="{{route('add.result', ['classroom_id' =>$classroom_id])}}">Grade exams</li></a>
                    <li class="list-group-item">                   
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" style="color:#007bff;font-size: 12px;" type="button" data-toggle="dropdown">View Other Classrooms
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                @foreach ($classrooms as $classroom)
                                    @if ($classroom->teacher_id==Auth::guard('teacher')->user()->user_id)       
                                        <li><a href="{{route('show.classroom', ['classroom_id' =>  $classroom->classroom_id])}}">{{ $classroom->title}}</a></li>     
                                    @endif
                                @endforeach
                            </ul>
                        </div>                       
                    </li>
                </ul>
            </div>

            <div class="showdiv">
                <ul class="list-group" style="box-shadow: 1px 3px 16px 5px rgb(0 0 0 / 16%);">
                    <li class="list-group-item" style="float: left;">                   
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" style="color:#007bff;font-size: 12px;" type="button" data-toggle="dropdown">Classroom List
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li class="list-group-item"><a href="{{route('view.addAssignment', ['classroom_id' =>$classroom_id])}}">Add assignment</a></li>
                                <li class="list-group-item"><a href="{{route('show.studentAssignment', ['classroom_id' =>$classroom_id])}}">Grade assignment</a></li>
                                <li class="list-group-item"><a href="{{route('show.teacherAssignment', ['classroom_id' =>$classroom_id])}}">View assignments</a></li>
                                <li class="list-group-item"><a href="{{route('showAllMemebers', ['class_id'=>$classroom_id])}}">Members</a><hr></li>
                                {{-- <li class="list-group-item">View All<hr></li> --}}
                                <li class="list-group-item"><a href="{{route('add.result', ['classroom_id' =>$classroom_id])}}">Grade exams</li></a>
                            </ul>
                        </div>                       
                    </li>
                </ul>
            </div>
            
            <div class="col-md-8" style="margin:-4px 0 0 -3px;">
                <div class="d-flex flex-column comment-section" id="myGroup">
                    <div class="bg-white p-2" style="height: 181px;box-shadow: 1px 3px 16px 5px rgb(0 0 0 / 16%);border-radius: 4;">
                        <form action="{{asset('post')}}" method="POST" enctype="multipart/form-data">
                            @csrf 
                        <div class="mt-2">
                            <div  class="bg-light p-2" data-parent="#myGroup" style="height: 159px;">
                                <textarea name="post" class="form-control ml-1 shadow-none textarea"id="Teacherannounce" placeholder=" insert your post...." style="height: 45px;margin-top: 17px;font-size: 12px;"></textarea> 
                                <input type="hidden" name="teacher_id" value="{{Auth::guard('teacher')->user()->user_id}}">
                                <input type="hidden" name="classroom_id" value="{{$classroom_id}}">
                                
                                <div class="mt-2 text-right">
                                    <input type="file" class="form-control-file" style="margin: 20px 0px -27px 5px;" name="file" id="exampleInputFile" >
                                    <button class="btn btn-primary btn-sm shadow-none" type="submit"  style="height: 29px; width: 18%;font-size: small;">Post</button>
                                    <button class="btn btn-danger btn-sm shadow-none" type="reset"  style="height: 29px;   width: 18%;font-size: small;">Cancel</button>
                                </div>

                            </div>
                        </div>
                        </form>
                    </div>            
                </div>
            </div>











        </div>
    </div>

@foreach ($studentposts as $studentpost)
@if ($studentpost->classroom_id==$classroom_id)
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="d-flex flex-column comment-section" id="myGroup">
                <div class="bg-white p-2">
                    <div class="d-flex flex-row user-info"><img class="rounded-circle" src="materials/{{$studentpost->student_id !== null ? $studentpost->student->photo :$studentpost->teacher->photo }}"  width="40">
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">{{$studentpost->student_id !== null ? $studentpost->student->fname :$studentpost->teacher->fname }} {{ $studentpost->student_id !== null ? $studentpost->student->lname : $studentpost->teacher->lname}}</span><span class="date text-black-50">Shared publicly &nbsp;{{date('F-d', strtotime($studentpost->updated_at))}} &nbsp;{{date('H:i', strtotime($studentpost->updated_at))}}</span></div>
                        @if ($studentpost->student_id==Auth::user()->user_id || $studentpost->teacher_id==Auth::user()->user_id) 
                        <div class="dropdown" style="margin-left: auto;margin: 0 38px 25px 12px 20px;margin-right: 12px;margin-top: 11px;">
                            <i class="fa fa-ellipsis-v" data-toggle="dropdown" style="font-size:24px;color:#007bff;">
                            </i>
                            <ul class="dropdown-menu">
                                {{-- <li><a href="{{route('show.profileDetails')}}"><i class="fa fa-user-o"></i> Profile</a></li> --}}
                                <li><a href="{{route('show.classroom',['classroom_id'=>$studentpost->classroom_id,'post_id'=>$studentpost->id])}}" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>
                                <li><a href="{{route('delete.content', ['post_id' => $studentpost->id])}}">Delete Post</a></li>
                            </ul>
                        </div>
                        @endif

                    </div>
                    <div class="mt-2">
                        @if ($post_id==null)
                        <p class="comment-text" style="font-size: 13px;margin: 12px 0 5px 43px;">{{$studentpost->post}}</p>
                        
                        @elseif($studentpost->id==$post_id)
                        <form action="{{route('update.content',['classroom_id'=>$studentpost->classroom_id, 'post_id'=>$studentpost->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <textarea name="post" class="form-control ml-1 shadow-none textarea" placeholder="" style="height: 45px;margin-top: 17px; font-size: 12px;font-size: 12px;">{{$studentpost->post}}</textarea>
                            <div class="mt-2 text-right">
                                <input type="file" class="form-control-file" style="margin: 20px 0px -27px 5px;" name="file" id="exampleInputFile" >                                
                                <button class="btn btn-primary btn-sm shadow-none" type="submit"  style="height: 29px;width: 110px;font-size: small;">Edit</button>
                                <a href="{{route('show.classroom',['classroom_id'=>$studentpost->classroom_id])}}"><button class="btn btn-danger btn-sm shadow-none" type="button"  style="height: 29px;width: 110px;font-size: small;">Cancel</button></a>
                        
                            </div>

                            {{-- <input type="text" name="post" value="{{$studentpost->post}}"> --}}
                            {{-- <input type="file" class="form-control-file" style="width: 294px;margin-top: 6px;" name="file" id="exampleInputFile" > 
                            <button class="btn btn-primary btn-sm shadow-none" type="submit"  style="height: 29px;width: 110px;font-size: small;">Edit</button> --}}
                       </form>
                        @else
                        <p class="comment-text" style="font-size: 13px;margin: 12px 0 5px 43px;">{{$studentpost->post}}</p> 
                        @endif
                    </div>

                    <div class="mt-2">
                        <p class="comment-text" style="font-size: 13px;margin: 12px 0 5px 43px;"><a href="{{route('download.post', ['post_id' =>$studentpost->id])}}">{{$studentpost->content}}</a></p>
                    </div>
                </div>

                @foreach($comments as $comment)
                @if ($comment->post_id==$studentpost->id)
                 <p hidden>{{$counter=$counter+1}}</p>
                @endif
                @endforeach
                 
                <div class="bg-white p-2">
                    <div class="d-flex flex-row fs-12">
                        <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                        <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-5" href="#collapse-{{$studentpost->id}}">{{$counter}}<i class="fa fa-commenting-o"></i><span class="ml-1"> Comment</span></div>
                        
                    </div>
                </div>
                

                {{-- @if ($studentpost->content!=null)
                    <img height="50px" width="50px" src="materials/{{$studentpost->content}}" alt="">
                @endif --}}
            @foreach($comments as $comment)
                @if ($comment->post_id==$studentpost->id)
                    <div id="collapse-{{$studentpost->id}}" class="bg-light p-2 collapse" data-parent="#myGroup">                                                                                       
                        <div class="d-flex flex-row align-items-start"><img class="rounded-circle" src="materials/{{$comment->student_id !== null ? $comment->student->photo :$comment->teacher->photo}}"width="35" height="32">
                        {{-- name and date --}}
                            <div class="d-flex flex-column justify-content-start ml-2">
                                <span class="d-block font-weight-bold name" style="font-size: 12px;">{{$comment->student_id !== null ? $comment->student->fname :$comment->teacher->fname }} {{ $comment->student_id !== null ? $comment->student->lname : $comment->teacher->lname}}<span class="date text-black-50" style="font-size: 8px;margin: 0 4px 0 2px;margin: 0 4px 0 2px;">Shared publicly &nbsp;{{date('F-d', strtotime($comment->updated_at))}} &nbsp;{{date('H:i', strtotime($comment->updated_at))}}</span>
                                    @if ($comment->student_id==Auth::user()->user_id || $comment->teacher_id==Auth::user()->user_id)
                                    <div class="dropdown" style="padding: 0 0 0 217px;margin-top: -16px;">
                                        <i class="fa fa-cog" aria-hidden="true" data-toggle="dropdown" style="font-size:18px;color:#007bff;"></i>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('show.classroom',['classroom_id'=>$comment->post->classroom_id,'comment_id'=>$comment->comment_id])}}" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>
                                            <li><a href="{{route('delete.content', ['comment_id' =>$comment->comment_id])}}">Delete Post</a></li>
                                        </ul>
                                    </div>
                                    @endif
                                </span>
                            </div>
                        </div>
                        {{-- comments --}}
                        <div class="mt-2">
                            @if ($comment_id==null)
                            <p class="comment-text" style="font-size: 13px;margin: 12px 0 5px 43px;">{{$comment->comments}}</p>
                            
                            @elseif($comment->comment_id==$comment_id)
                            <form action="{{route('update.content',['classroom_id'=>$comment->post->classroom_id, 'comment_id'=>$comment->comment_id])}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <textarea name="comment" class="form-control ml-1 shadow-none textarea" placeholder="" style="height: 45px;margin-top: 17px;font-size: 12px;">{{$comment->comments}}</textarea>


                                <div class="mt-2 text-right">
                                    <input type="file" class="form-control-file" style="margin: 20px 0px -27px 5px;" name="file" id="exampleInputFile" >                                
                                    <button class="btn btn-primary btn-sm shadow-none" type="submit"  style="height: 29px;width: 110px;font-size: small;">Edit</button>
                                    <a href="{{route('show.classroom',['classroom_id'=>$studentpost->classroom_id])}}"><button class="btn btn-danger btn-sm shadow-none" type="button"  style="height: 29px;width: 110px;font-size: small;">Cancel</button></a>
                            
                                </div>

                                {{-- <button class="btn btn-primary btn-sm shadow-none" type="submit"  style="height: 29px;width: 110px;font-size: small;">Edit</button> --}}
                           </form>
                            @else
                            <p class="comment-text" style="font-size: 13px;margin: 12px 0 5px 43px;">{{$comment->comments}}</p> 
                            @endif
                        </div>

                        <div class="mt-2">
                            <p class="comment-text" style="font-size: 13px;margin: 12px 0 5px 43px;"><a href="{{route('download.post', ['comment_id' =>$comment->comment_id])}}">{{$comment->content}}</a></p>
                        </div>
                        <hr> 
                    </div>

                    {{-- @if ($comment->content!=null)
                        <img height="50px" width="50px" src="materials/{{$comment->content}}" alt="">
                    @endif --}}
                @endif
            @endforeach 
                <form action="{{route('post.comment')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div id="collapse-{{$studentpost->id}}" class="bg-light p-2 collapse" data-parent="#myGroup">
                        
                        <div class="d-flex flex-row align-items-start"><img class="rounded-circle" src="materials/{{$studentpost->student_id !== null ? $studentpost->student->photo :$studentpost->teacher->photo }}"  width="35" height="32">
                            <textarea name="comments" class="form-control ml-1 shadow-none textarea" placeholder="Add comment" style="font-size: 12px;"></textarea> 
                            <input type="file" class="form-control-file" style="width: 294px;margin-top: 6px;" name="file" id="exampleInputFile">
                        </div>
                            
                        <input type="hidden" name="post_id" value="{{$studentpost->id}}">
                        <input type="hidden" name="classroom_id" value="{{$classroom_id}}">
                        <input type="hidden" name="teacher_id" value="{{Auth::guard('teacher')->user()->user_id}}">
                        <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="submit"  style="height: 29px;width: 110px;font-size: small;">Comment</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endif
@endforeach
@endsection
       
<!-- Footer -->
<!--End Loading Screen-->
     <script src="../public/js/jquery-3.3.1.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/plugins.js"></script>
    <script src="../public/js/wow.min.js"></script>
    <script>new WOW().init();</script>
@endif
        
</html>
