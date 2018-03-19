<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
    <body>
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md">
              <nav>
                <div class="mobile_lyrika pull-left">
                  <a href="{{route('index')}}"><img src="{{asset('images/img.png')}}" alt="" class="float-md-left lyrika"></a>
                </div>
                <button class="navbar-toggler pull-right mobile_icon" id="btn" type="button" data-toggle="collapse" data-target="#collapsingNavbar1" onclick="myFunction()">
                  <a>   ☰</a>
                 </button>
                 <button class="navbar-toggler pull-right second_icon" id="btn" type="button" data-toggle="collapse" data-target="#collapsingNavbar1" onclick="myFunction()">
                   <a>   ☰</a>
                  </button>
                <ul class="nav">
                  <li class="navigat margin">
                    <i class="fas fa-home"></i>
                    <a href="{{route('index')}}" class="h1a">Home</a>
                  </li>
                  <li class="navigat margin">
                    <i class="fas fa-info"></i>
                    <a href="{{route('supplements')}}" class="h1a">Supplements</a>
                  </li>
                  <li class="navigat margin">
                    <i class="fas fa-users"></i>
                    <a href="{{route('coaches')}}" class="h1a">Coaches</a>
                  </li>
                  <div class="dropdown show dropdown_navigat">
                    <a class="btn h1a dropdown-toggle size" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" style="font-size: 17px;">
                      <i class="fas fa-bomb"></i> Workouts
                    </a>

                    <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">

                      @foreach ($workouts as $workout)

                        <a class="dropdown-item" href="{{route('workout-show', $workout->id)}}">{{$workout->workout}}</a>

                      @endforeach


                      @if (Auth::check())
                        @if (Auth::user()->isAdmin())
                        <li class="dropdown-divider"></li >
                           <a class="dropdown-item" href="{{route('workout')}}">Workouts</a>
                         </li>
                       @endif
                     @endif
                    </div>
                  </div>

                  <li class="navigat margin">
                    @if (!Auth::check())
                      <i class="fas fa-sign-in-alt"></i>
                      <a href="{{route('login')}}" class="h1a">Login</a>
                    @endif


                    @if (Auth::check())
                      @if (Auth::user()->isAdmin())

                        <i class="fas fa-sign-in-alt"></i>
                        <a href="{{route('login')}}" class="h1a">Admin</a>

                      @elseif (Auth::user())
                        <i class="fas fa-sign-in-alt"></i>
                        <a href="{{route('login')}}" class="h1a">{{ ucfirst(Auth::user()->name) }}</a>
                      @endif
                    @endif

                  </li>


                  <li class="navigat margin">
                    @if (Auth::check())
                      <i class="fas fa-registered"></i>
                      <a href="#" class="h1a"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                      </a>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                      @elseif (!Auth::check())
                        <i class="fas fa-registered"></i>
                        <a href="{{route('register')}}" class="h1a">Register</a>
                    @endif

                  </li>
                  <li class="navigat contact">
                    <i class="fas fa-address-book"></i>
                    <a href="{{route("about")}}" class="h1a">About us</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <main>


            @yield('content')

          </main>
          <footer>
          <section class="{{$class}}">
            <div class="container">
              <div class="row">
                <div class="col-md  text-center">
                  <div class="contacts">
                    <i class="far fa-address-card"></i><span> Pranciškonų g. 10, Kaunas</span>
                  </div>
                  <div class="contacts">
                    <i class="fas fa-phone-volume"></i><span> +370 600 44 555</span><br>
                  </div>
                  <div class="contacts">
                    <i class="far fa-envelope"></i><span> lyrika_gym@gmail.com</span>
                  </div>
                  <div class="icons">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                  </div>
                  <div class="icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </div>
                  <div class="icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                  </div>
                  <div class="icons">
                    <a href="#"><i class="fab fa-youtube"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          </footer>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <script type="text/javascript">








              $(document).ready(function(){

                    $( ".mobile_icon" ).click(function() {
                      $( ".navigat, .dropdown_navigat" ).toggle( "slow", function() {
                      $( ".mobile_icon" ).hide();
                      $( ".second_icon" ).show();
                    });
                    });

                    $( ".second_icon" ).click(function() {
                      $( ".navigat, .dropdown_navigat" ).toggle( "slow", function() {
                        $( ".second_icon" ).hide();
                        $( ".mobile_icon" ).show();
                      });
                    });

                    });





          </script>
        </body>
      </html>
