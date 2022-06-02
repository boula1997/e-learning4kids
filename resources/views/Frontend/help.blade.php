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
    {{-- <link rel='stylesheet'href="{{asset('css/questionairResultStyle.css')}}"/> --}}
    
    {{-- <link rel="icon" href="{{asset('help/images/icons/favicon.ico')}}"/> --}}
    <link rel="stylesheet"  href="{{asset('help/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet"  href="{{asset('help/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    
    <link rel="stylesheet"  href="{{asset('help/vendor/animate/animate.css')}}">
    
    <link rel="stylesheet"  href="{{asset('help/vendor/css-hamburgers/hamburgers.min.css')}}">
    
    <link rel="stylesheet"  href="{{asset('help/vendor/select2/select2.min.css')}}">

    <link rel="stylesheet"  href="{{asset('help/css/util.css')}}">
    <link rel="stylesheet"  href="{{asset('help/css/main.css')}}">
</head>

<body>

<!-- header -->

@section('content')


<div class="contact1" style="    background: -webkit-linear-gradient(left, #0072ff, #0072ff);" >
  <div class="container-contact1" style="margin-top: 0px; height: 500px;" >
    <div class="contact1-pic js-tilt" data-tilt>
      <img style="margin-top: -100px" src="{{asset('help/images/message.png')}}" alt="IMG">
    </div>

    <form class="contact1-form validate-form" action="{{route('help.anyone')}}" method="post" >
      @csrf
      <span class="contact1-form-title" style="font-size: large; margin-top: -60px">
        Get in touch
      </span>

      <div class="wrap-input1 validate-input" data-validate = "Name is required">
        <input  class="input1" style="height: 40px;border-radius: 25px; padding: 0 30px; margin-top: -15px" type="text" name="name" placeholder="Name">
        <span class="shadow-input1"></span>
      </div>

      <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input1" style="height: 40px;border-radius: 25px; padding: 0 30px" type="text" name="email" placeholder="Email">
        <span class="shadow-input1"></span>
      </div>

      <div class="wrap-input1 validate-input" data-validate = "Subject is required">
        <input class="input1" style="height: 40px ;border-radius: 25px; padding: 0 30px" type="text" name="subject" placeholder="Subject">
        <span class="shadow-input1"></span>
      </div>

      <div class="wrap-input1 validate-input" data-validate = "Message is required">
        <textarea class="input1" style="height: 0px;border-radius: 20px;min-height: 120px" name="message" placeholder="Message"></textarea>
        <span class="shadow-input1"></span>
      </div>

      <div class="container-contact1-form-btn">
        <button type="submit" class="contact1-form-btn" style="background-color:#0072ff">
          <span>
            Send Email
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
          </span>
        </button>
      </div>
    </form>
  </div>
</div>







    @endsection
     <!-- Footer -->

         <!--End Loading Screen-->

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>

<script src="{{asset('help/js/main.js')}}"></script>

   
<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>

<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('vendor/select2/select2.min.js')}}"></script>

<script src="{{asset('vendor/tilt/tilt.jquery.min.js')}}"></script>
<script >
  $('.js-tilt').tilt({
    scale: 1.1
  })
</script>


<script src="{{asset('help/js/main.js')}}"></script>


</div>



</body>
</html>
