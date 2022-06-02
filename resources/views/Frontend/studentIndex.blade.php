
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
        <link rel='stylesheet'href="{{asset('css/home.css')}}"/>
</head>
<body>

@section('content')
  <!--Body-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col3">
          {{$parents}}
          @foreach ($parents as $student)
        <h1>{{$student->fname}}</h1>
        <h1>{{$student->lname}}</h1>
        <p>{{$student->email}}</p>

        <button type="button" class="btn btn-primary">Get Started</button>
        <button type="button" class="btn btn-outline-primary">View Demo</button>

      </div>
      <div class="col-lg-8 col4">



          <div class="slideshow-container">

            <div class="mySlides fade">
              <img src="../public/images/img1.jpg" style="width:100%">
              <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
              <img src="../public/images/img2.jpg" style="width:100%">
              <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
              <img src="../public/images/img3.jpg" style="width:100%">
              <div class="text">Caption Three</div>
            </div>


          </div>
          @endforeach
          <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>

          <script>
          var slideIndex = 0;
          showSlides();

          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }
          </script>

      </div>
  </div>


  <div class="row">
    <div class="col-lg-12 col6">

          <video src="../public/images/1.mp4" controls >1</video>
    </div>

    <div class="row" id="offer">


        <div class="col-lg-6  col7">

          <div class="about-text">
            <h1>E-Learning System<br>For Kids</h1>
            <!-- <h1>Limitless learning,<br> limitless possibilities</h1> -->
            <span class="square"></span>
            <p>Teachers can only mange, upload all of the resources and materials.
              Students are to keep track in their courses with gimified System. Parents are for monitoring their children's<br>
              academic performance.</p>
            <button class="common-btn">Start Now</button>
            <div class="line">
                <span class="line-1"></span><br>
                <span class="line-2"></span><br>
                <span class="line-3"></span>
            </div>
        </div>

      </div>

      <div class="col-lg-6   col7">
        <img src="../public/images/offer2.jpg" alt="about">
      </div>


    </div>
    <div class="row" id="features">

        <div class="col-lg-4 feature-col">
          <img src="../public/images/pic-1.png" alt="">
          <h4>Learn Anywhere</h4>
          <p>Switch between your computer, tablet or mobile device</p>
        </div>
        <div class="col-lg-4 feature-col">
          <img src="../public/images/pic-2.png" alt="">
          <h4>Expert Teachers</h4>
          <p>Learn from industry experts who are passionate about teaching</p>
        </div>
        <div class="col-lg-4 feature-col">
          <img src="../public/images/pic-3.png" alt="">
            <h4>Unlimited Access</h4>
            <p>Choose what you'd like to learn from our extensive supscriptio library</p>
        </div>

    </div>

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
