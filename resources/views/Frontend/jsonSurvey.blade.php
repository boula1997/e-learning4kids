@extends('Frontend.master')
<!DOCTYPE html>
<html>
    <head>
        <title>Student Survey</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- for dropdown --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        {{-- for dropdown --}}

        <script src="https://unpkg.com/jquery"></script>
        <script src="https://surveyjs.azureedge.net/1.0.60/survey.jquery.js"></script>
        <link href="https://surveyjs.azureedge.net/1.0.60/survey.css" type="text/css" rel="stylesheet"/>
        {{-- <!-- <link rel="stylesheet" href="style.css"> --> --}}

        

  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <title>E-Learning4Kids</title> --}}
        {{-- <link rel="icon" href="{{asset('images/icon2.jpg')}}" /> --}}
        <link rel='stylesheet'href ="{{asset('css/bootstrap.css')}}"/>
        <link rel='stylesheet'href ="{{asset('css/font-awesome.min.css')}}"/>
        <link rel='stylesheet'href ="{{asset('css/style.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>
        <style>
            .footer {
                margin-top: 200px;
            }
        </style>
    </head>
    <body>

    
    @section('content')
    <div class="container-fluid">
        
        <div id="surveyElement"></div>
        <script type="text/javascript" src="{{asset('js/file.js')}}"></script>
        <form id="surveyForm" action="{{ route('result') }}" method="GET">
            @csrf
            <input type="hidden" name="surveyFinalResult" id="surveyFinalResult" value="">
        </form>
        {{-- <div id="surveyResult"></div> --}}
        
    </div>   
    @endsection
<!-- Footer -->
<!--End Loading Screen-->


    
</body>    
</html>




