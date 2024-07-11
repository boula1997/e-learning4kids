
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
        <link rel='stylesheet'href="{{asset('css/home.css')}}"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  <script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function() {
      // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");;
    });
  </script>   

    <!-- Start of e-learninig Zendesk Widget script -->
    {{-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=1185a688-6de8-4a53-8246-4cf9832b1d45"> </script> --}}
    <!-- End of e-learninig Zendesk Widget script -->

    {{-- new one --}}
    <!-- Start of e-learning4kids Zendesk Widget script -->
    {{-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=ecdf0315-01aa-4e32-8ba1-82f3ba9242da"> </script> --}}
    <!-- End of e-learning4kids Zendesk Widget script -->


</head>
<body>
<!-- Paste this code after body tag -->
<div class="se-pre-con"></div>
<!-- Ends -->
@section('content')
  <!--Body-->
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-4 col3">
        <h1>What is the gamified Learning system</h1>
        <p>Learning System for kids is an education via the Internet, network, or standalone computer.
          It is an online platform where students can learn,
           teachers can create contents and Parents can monitor their children</p>

        {{-- <a href="{{asset('registerAs')}}"><button type="button" class="btn btn-primary" style="background-color:blue">Get Started</button></a> --}}
        <a href="{{asset('registerAs')}}"><button class="common-btn">Start Now</button></a>
        <a href="{{asset('#videoDemo')}}"><button class="common-btn">View Demo</button></a>
        {{-- <a href="{{asset('#videoDemo')}}"><button type="button" class="btn btn-primary">View Demo</button></a> --}}
        
      </div>
      <div class="col-lg-8 col4">
          <div class="slideshow-container">

            <div class="mySlides fade">
              <img src="{{asset('images/img1.jpg')}}" style="width:100%">
              {{-- <div class="text">Caption Text</div> --}}
            </div>

            <div class="mySlides fade" style="margin-top: 5px">
              <img src="{{asset('images/img2.jpg')}}" style="width:100%">
              {{-- <div class="text">Caption Two</div> --}}
            </div>

            <div class="mySlides fade">
              <img src="{{asset('images/img3.jpg')}}" style="width:100%">
              {{-- <div class="text">Caption Three</div> --}}
            </div>
        
            <div class="mySlides fade" style="margin-bottom: 50px">
              <img src="{{asset('images/img6.jpg')}}" style="width:100%">
              {{-- <div class="text">Caption Three</div> --}}
            </div>



          </div>

          <div style="text-align:center;margin-top:-40px">
            <span class="dot"></span>
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


  <div class="row" id="videoDemo">
    <div class="col-lg-12 col6" >

          {{-- <video src="{{asset('videos/')}}" controls>1</video> --}}
          <video width="400" controls>
            <source src="{{asset('videos/01.mp4')}}" type="video/mp4">mov        
          </video>
    </div>

    <div class="row" id="offer">


        <div class="col-lg-6 col7">

          <div class="about-text">
            <h1>E-Learning System<br>For Kids</h1>
            <!-- <h1>Limitless learning,<br> limitless possibilities</h1> -->
            <span class="square"></span>
            <p>Teachers can only mange, upload all of the resources and materials.
              Students are to keep track in their courses with gimified System. Parents are for monitoring their children's<br>
              academic performance.</p>
              <a href="{{asset('registerAs')}}"><button class="common-btn">Start Now</button></a>
            <div class="line">
                <span class="line-1"></span><br>
                <span class="line-2"></span><br>
                <span class="line-3"></span>
            </div>
        </div>

      </div>

      <div class="col-lg-6   col7">
        <img src="{{asset('images/offer2.jpeg')}}" alt="about">
      </div>


    </div>
    <div class="row" id="features">

        <div class="col-lg-4 feature-col">
          <img src="{{asset('images/pic-1.png')}}" alt="">
          <h4>Learn Anywhere</h4>
          <p>Switch between your computer, tablet or mobile device</p>
        </div>
        <div class="col-lg-4 feature-col">
          <img src="{{asset('images/pic-2.png')}}" alt="">
          <h4>Expert Teachers</h4>
          <p>Learn from expert teachers who are passionate about teaching</p>
        </div>
        <div class="col-lg-4 feature-col">
          <img src="{{asset('images/pic-3.png')}}" alt="">
            <h4>Unlimited Access</h4>
            <p>Choose what you'd like to learn from our learning system</p>
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
