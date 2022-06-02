<!-- start nav bar  -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
  {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}


  <style>
    /* width */
    ::-webkit-scrollbar {
      width: 10px;
    }
    
    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey; 
      border-radius: 5px;
    }
     
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #0b9bb8; 
      border-radius: 10px;
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #afafaf; 
    }
    </style>
    </head>   
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navtest" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!--  logo  -->
        <a class="navbar-brand" href="#"> E-Learning<span>4kids</span></a>
      </div>


      <div class="collapse navbar-collapse" id="navtest">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="{{asset('/')}}">Home </a></li>
                    @if (Auth::guard('student')->user())
                      {{-- <li ><a href="{{asset('/')}}">Home </a></li> --}}
                      <li ><a href="{{asset('student')}}">Student </a></li>
                    @elseif(Auth::guard('teacher')->user())
                      {{-- <li ><a href="{{asset('/')}}">Home </a></li> --}}
                      <li><a href="{{asset('teacher')}}">Teacher</a></li>
                    @elseif(Auth::guard('parent')->user())
                      {{-- <li ><a href="{{asset('/')}}">Home </a></li> --}}
                      <li><a href="{{asset('parent')}}">Parent</a></li>
                    @else
                      {{-- <li ><a href="{{asset('/')}}">Home </a></li> --}}
                      <li ><a href="{{asset('student')}}">Student </a></li>
                      <li><a href="{{asset('teacher')}}">Teacher</a></li>
                      <li><a href="{{asset('parent')}}">Parent</a></li>
                    @endif
                      
                   
                    
                    
                    
                    
                            
                
                    {{-- <li class="active"><a href="{{asset('registerAs')}}">Login <span class="sr-only">(current)</span></a></li> --}}
                
                    {{-- <ul class="navbar-nav ml-auto"> --}}
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('loginAs') }}">{{ __('Login') }}<span class="sr-only">(current)</span></a>
                                </li>
                            @endif
                               
                          
                            @else
                        {{-- <li><a href="{{route('show.profileDetails')}}">Profile</a></li> --}}
                            <li class="nav-item dropdown active">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{-- <img src="https://www.tutorialrepublic.com/examples/images/avatar/3.jpg" class="avatar" alt="Avatar"> Antonio Moreno <b class="caret">   --}}
                                    {{ Auth::user()->fname }}
                                    {{ Auth::user()->lname }}
                                    <span class="sr-only">(current)</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="padding:7px 58px 6px 33px; width: 0;">
                                  <a href="{{route('show.profileDetails')}}"><i class="fa fa-user-o"></i> Profile</a>
                                  <a href="{{route('show.accountsetting')}}" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a>
                                  @if (!Auth::guard('teacher')->user())
                                       <a href="{{route('sendHelpEmail')}}" class="dropdown-item"><i class="fa fa-sliders"></i> Help</a>
                                  @endif
                                 
                                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                          <i class="material-icons" style="font-size: 19px;">&#xE8AC;</i>Logout
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                                </div>
                            </li>
                        @endguest
                    </ul>  
                </ul>
      </div>
    </div>
  </nav>

  <!-- end navbar -->

  {{-- <script>
    window.watsonAssistantChatOptions = {
        integrationID: "9e2261ba-8b55-4efe-81a0-2f2a2f3c5779", // The ID of this integration.
        region: "eu-gb", // The region your integration is hosted in.
        serviceInstanceID: "5ccbba13-fd7f-4342-a5f3-429ee1bfff0c", // The ID of your service instance.
        onLoad: function(instance) { instance.render(); }
      };
    setTimeout(function(){
      const t=document.createElement('script');
      t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
      document.head.appendChild(t);
    });
  </script> --}}

  <script>
    window.watsonAssistantChatOptions = {
        integrationID: "d4192454-46c5-4a22-a499-ba7ff89976a0", // The ID of this integration.
        region: "eu-gb", // The region your integration is hosted in.
        serviceInstanceID: "5ccbba13-fd7f-4342-a5f3-429ee1bfff0c", // The ID of your service instance.
        onLoad: function(instance) { instance.render(); }
      };
    setTimeout(function(){
      const t=document.createElement('script');
      t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
      document.head.appendChild(t);
    });
  </script>





@yield('content')



{{-- <div class="shadow p-3 mb-5 bg-white rounded">Regular shadow</div> --}}
  <!-- start Footer -->
  <section class="footer">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6 col-md-6 col-sm-3">
				<h3>Site Map</h3>
				<ul class="list-unstyled threecol ">
					<li>Home</li>
					<li>Student Page</li>
					<li>Teacher Page</li>
					<li>Parent Page</li>
					<li>Login</li>
					<li>Register As</li>
					{{-- <li>Offers and promotions</li>
					<li>Handsets and Devices</li>
					<li>Entertainment</li> --}}
					<li>Find Us</li>
					<li>Contact Us</li>

				</ul>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-3">
				<h3>Follow Us</h3>
				<ul class="list-unstyled icons">
					<li> <i class="fa fa-facebook fa-3x " aria-hidden="true"></i></li>
					 <li><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></li>
					<li> <i class="fa fa-pinterest fa-3x" aria-hidden="true"></i></li>
					<li><i class="fa fa-youtube-play fa-3x" aria-hidden="true"></i></li>
				</ul>
			</div>

		</div>

	</div>

	<div class="copyright text-center">
                   Copyright&copy;2021 <span>E-Learning4Kids</span>.Egypt
            </div>
        </section>
        <!-- End Footer -->



