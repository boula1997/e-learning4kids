
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
            <link rel='stylesheet'href ="{{asset('css/childview.css')}}"/>
            <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}" />
       
    </head> 
    <body>
    


        @section('content')

        @foreach ($studentassignments as $studentassignment )
        @if ($studentassignment ->classroom_id ==$classroom_id)
            <!--Body-->
            <div class="row">
            
                <div  class=" col-lg-12  col-md-12 col-sm-12 col-xm-12  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300">
                <a href="{{route('show.Assignment', ['assignment_id' =>$studentassignment ->id , 'classroom_id' =>$studentassignment ->classroom_id ])}}"><span class="badge badge-primary" style="color: black; background-color: white; font-size: 20px;margin-left: 20% ;padding-top: 10px" >{{$studentassignment->assignment->title}}</span></a> 
                        <span class="badge badge-primary" style="color: black; background-color: white; font-size: 20px;margin-left: 40%;padding-top: 10px " >{{$studentassignment ->student->fname}}</span>
                       
                       
                        <table class="table" style="width: 80%; margin-left: 10%;margin-top:10px ">
                         
                                <th  scope="row" style="width: 80%" ></th>
                          
                          </table>

                </div>

                <div  class="col-lg-3  col-md-3 col-sm-12 col-xm-3  col13  wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >
    
               
                </div>
               
          

               
            </div>

           
          

            @endif

            @endforeach
           


        @endsection


      
        <script src="../public/js/jquery-3.3.1.min.js"></script>
                <script src="../public/js/bootstrap.min.js"></script>
                <script src="../public/js/plugins.js"></script>
                <script src="../public/js/wow.min.js"></script>
                <script>new WOW().init();</script>
                  <!-- MDB -->
                <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

    </body>
</html>
