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
    <link rel='stylesheet'href="{{asset('css/questionairResultStyle.css')}}"/>
    {{-- <link rel='stylesheet'href="{{asset('css/cards.css')}}"/> --}}

    {{-- <link rel='stylesheet'href="{{asset('css/app.css')}}"/> --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
</head>

<body>

<!-- header -->

@section('content')


    <p hidden>{{$max=max($personalTypes)}}</p>
    <!-- body -->
     <div class="row">
        <div class="col-lg-12 col3">
            <div class="row">
                <!-- body -->
                <div class="col-lg-6 col4">
                    <p><strong>Result of Your Personality Type</strong></p>
                    <!-- tabele -->
                    <table id="bigFive">
                        <tr>
                          <th>Personality Type</th>
                          <th>Percentage</th>
                        </tr>
                        <tr>
                          <td>Extraversion</td>
                          <td>{{ number_format($personalTypes['extraversion'], 2, '.', ',')}}</td>
                        </tr>
                        <tr>
                          <td>Agreeableness</td>
                          <td>{{ number_format($personalTypes['agreeableness'], 2, '.', ',') }}</td>
                        </tr>
                        <tr>
                          <td>Consientiousness</td>
                          <td>{{ number_format($personalTypes['consientiousness'], 2, '.', ',') }}</td>
                        </tr>
                        <tr>
                          <td>Neuroticism</td>
                          <td>{{ number_format($personalTypes['neuroticism'], 2, '.', ',')}}</td>
                        </tr>
                        <tr>
                          <td>Openness</td>
                          <td>{{number_format($personalTypes['openness'], 2, '.', ',')}}                          
                        </tr>
                        @foreach ($personalTypes as $key => $value)
                          @if ($value==$max)
                            <tr>
                              <td>You are <strong>{{$key}}</strong></td>
                              <td><strong>{{number_format($value, 2, '.', ',')}}</strong>                       
                            </tr> 
                         
                      </table>
                      <a href="{{asset('#personality')}}"><button type="button" class="btn btn-primary" style="width:-webkit-fill-available;margin-top: 18px;">More About Personality Type</button></a>
                      <form action="{{route('update.personality',['personality_type'=>$key, 'student_id'=>Auth::guard('student')->user()->user_id])}}" method="post">
                        @csrf
                        <input type="hidden" name="peronality_type" value="{{$key}}">
                        <input type="hidden" name="student_id" value="{{Auth::guard('student')->user()->user_id}}">
                        <button type="submit" class="btn btn-primary" style="width:-webkit-fill-available;margin-top: 18px;">Next</button>
                        {{-- <button type="submit">Next</button> --}}
                        @endif
                        @endforeach

                      {{-- <button type="submit" class="btn btn-primary" style="width:-webkit-fill-available;margin-top: 18px;">Next</button> --}}
                    </form>
                      {{-- <button class="common-btn">Next</button> --}}
                    <!--end of table-->
                </div>
          </div>

        </div>

    </div>


    {{-- 4 --}}
<div class="container bootstrap snippets bootdeys" style="text-align: -webkit-center; margin-top:12%"id="personality">
  <h3 style="text-align: left" >Big Five Personality Traits</h3>
  <div class="row">
      <div class="col-md-4 col-sm-6 content-card">
          <div class="card-big-shadow">
              <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                  <div class="content">
                      {{-- <h6 class="category">Openness</h6> --}}
                      <h4 class="title"><a href="#">Openness</a></h4>
                      <p class="description">Known as curious and open to new ideas. </p>
                  </div>
              </div> <!-- end card -->
          </div>
      </div>
      
      <div class="col-md-4 col-sm-6 content-card">
          <div class="card-big-shadow">
              <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                  <div class="content">
                      {{-- <h6 class="category">Best cards</h6> --}}
                      <h4 class="title"><a href="#">Conscientiousness</a></h4>
                      <p class="description">Known as organized and systematic. </p>
                  </div>
              </div> <!-- end card -->
          </div>
      </div>
      
      <div class="col-md-4 col-sm-6 content-card">
          <div class="card-big-shadow">
              <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
                  <div class="content">
                      {{-- <h6 class="category">Best cards</h6> --}}
                      <h4 class="title"><a href="#">Extraversion</a></h4>
                      <p class="description">Known as being outgoing and enjoy social situations. </p>
                  </div>
              </div> <!-- end card -->
          </div>
      </div>
        

      {{-- <div class="col-md-4 col-sm-6 content-card">
          <div class="card-big-shadow">
              <div class="card card-just-text" data-background="color" data-color="brown" data-radius="none">
                  <div class="content">
                      <h6 class="category">Best cards</h6>
                      <h4 class="title"><a href="#">Brown Card</a></h4>
                      <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                  </div>
              </div> <!-- end card -->
          </div>
      </div> --}}
    </div>

    <div class="row" style="margin-bottom: 33px;">
      
      <div class="col-md-2 col-sm-6">
      </div>
      <div class="col-md-4 col-sm-6 content-card">
          <div class="card-big-shadow">
              <div class="card card-just-text" data-background="color" data-color="purple" data-radius="none">
                  <div class="content">
                      {{-- <h6 class="category">Best cards</h6> --}}
                      <h4 class="title"><a href="#">Agreeableness</a></h4>
                      <p class="description">Known as being tolerant and trusting. </p>
                  </div>
              </div> <!-- end card -->
          </div>
      </div>
      <div class="col-md-4 col-sm-6 content-card">
          <div class="card-big-shadow">
              <div class="card card-just-text" data-background="color" data-color="orange" data-radius="none">
                  <div class="content">
                      {{-- <h6 class="category">Best cards</h6> --}}
                      <h4 class="title"><a href="#">Neuroticism</a></h4>
                      <p class="description">Known as being anxious and moody.</p>
                  </div>
              </div> <!-- end card -->
          </div>
      </div>
      <div class="col-md-2 col-sm-6">
          
      </div>
      {{-- <a href="{{route('login/student')}}"><button type="button" class="btn btn-primary" style="width:-webkit-fill-available;margin-top: 18px;">Next</button></a> --}}
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



</body>
</html>
