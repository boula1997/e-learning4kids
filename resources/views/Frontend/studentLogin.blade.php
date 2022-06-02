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
        <link rel='stylesheet'href ="{{asset('css/login.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>

</head>

<body>

<!-- start nav bar  -->


@section('content')

        <!--Body-->
    <div class="row">
        <div class="col-lg-6 col-sm-12 col3">
            <label class="loging">Login Form</label>
        </div>

    </div>

    <!-- Email-->
    <div class="row">
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="col-lg-6 col-md-6 col-sm-3 col9">
          <!--Email -->
          {{-- <label class="Email" for="email">Email</label><br> --}}
          {{-- <input type="text" id="Email" name="Email" placeholder="Your Email.."> <br> --}}

          <label for="email" class="Email col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

          <!--Password -->
          <label class="passowrd" for="passowrd">Passowrd</label><br>
          <input type="password" id="passowrd" name="passowrd" placeholder="Your passowrd.."><br>

          <!--Buttoms -->
        <br> <button type="button" class="btn btn-danger btn-lg" style="margin-left: 80px; margin-top: 50px;">Cancel </button>
              <button type="button" class="btn btn-success btn-lg" style="margin-left: 20px; margin-top: 50px;">Log in</button>
        </div>
        </form>
        <div class="col-lg-6 col-md-6 col-sm-3 col4">
          <div class="circle"></div>

          <img class="img1" src="../public/images/photos/login.png">

          <div class="circle2"></div>
      </div>

    </div>


    @endsection
         <!--End Loading Screen-->

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>


</body>
</html>
