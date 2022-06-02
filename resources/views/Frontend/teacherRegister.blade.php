
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

</head>

<body>

{{-- header --}}
@section('content')
    
<!-- start login page -->
<!-- start section contact us -->
<section class="register text-center">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12 wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >
        <i class="fa fa-user fa-5x"></i>
        <h1>Make a New Account</h1>
        <p class="lead">Welcome to School</p>

    </div>

    <div class="container">
    <form action="../PHP/teacherreg.php" method="POST" role="role">
<div class="col-md-6 wow fadeInUp"data-wow-duration="1s" data-wow-offset="300" >
        

        <div class="form-group">
            <input type="text" class="form-control input-lg"  placeholder="First Name" name="First_Name">
        </div>

      <div class="form-group">
        <input type="text" class="form-control input-lg"  placeholder="Name of School" name="Name_of_School">
    </div>
      <div class="form-group">
          <input type="text" class="form-control input-lg"  placeholder="Age" name="Age">
      </div>
      <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="password" name="My_Password">
    </div>
 

    </div>

    <div class="col-md-6 wow fadeInUp"data-wow-duration="1s" data-wow-offset="300" >
        

     
      <div class="form-group">
        <input type="text" class="form-control input-lg"  placeholder="Last Name" name="Last_Name">
    </div>
    <div class="form-group">
      <input type="text" class="form-control input-lg"  placeholder="Address" name="Address">
  </div>
    <div class="form-group">
      <input type="email" class="form-control input-lg"  placeholder="Email" name="Email">
  </div>
    <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="Confirm password" name="Confirm_Password">
    </div>    

  </div>

    
     <div class="col-md-6">
    <button type="submit" value="submit" class="btn-lg btn-block">Register</button>
     </div>
    <div class="col-md-6">
    <a href="{{asset('login')}}"> already have an account</a>
    </div>
  
  </form>
  </div>
    
</div>
    </div>
</section>
@endsection

<!-- End section contact us -->
<!-- end login page -->

<!-- footer -->



<div class="panel"></div>

      
         <!--End Loading Screen-->

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/plugins.js')}}"></script>
  <script src="{{asset('js/wow.min.js')}}"></script>
  <script>new WOW().init();</script>

</body>
</html>

