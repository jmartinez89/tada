<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    <div id="app">
      <div style="background: url(/images/fondo-header.png); background-size: auto 100%;">
          <nav class="navbar navbar-expand-lg navbar-light container">
            <a class="navbar-brand" href="/"><img src="/images/logo.png" class="img-fluid" style="width: 155px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto" id="main-menu">
                <li class="nav-item">
                  <form class="form-inline" style="position: relative;">
                    <input class="form-control mr-sm-2 text-celeste" type="search" placeholder="Search" aria-label="Search" style="border-radius: 38px;  width: 240px;">
                    <button class="btn btn-light" type="submit" style="border-radius: 100%; position: absolute; right: 0;"><i class="fas fa-search text-celeste"></i></button>
                  </form>
                </li>
                <li class="nav-item active">
                  <a class="nav-link text-white" href="#">Products <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">How</a>
                </li>
              </ul>
              <ul class="navbar-nav my-2 my-lg-0">
                  @guest
                  <li class="nav-item"><a class="nav-link" href="{{ route('register') }}" style="background: #fff; color: #a2dafa; border-radius: 40px; padding: 8px 25px;">Sing In</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="{{ route('login') }}">Log In</a></li>
                  
                  @else
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Log Out
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
                  @endguest
              </ul>
            </div>
          </nav>
        </div>
        @yield('content')

        <div id="footer" style="background: #202020;">
          <div  class="container">
            <div class="row pt-5 pb-5">
              <div class="col-md-8">
                <div class="row">
                  
                  <div class="col-md-3">
                    <h5 class="text-white">Services</h5>
                    <p class="text-white">Marketplace</p>
                    <p class="text-white">Local</p>
                    <p class="text-white">Logistic</p>
                  </div>
                  <div class="col-md-3">
                    <h5 class="text-white">About</h5>
                    <p class="text-white">About Us</p>
                    <p class="text-white">World Economic Forum</p>
                    <p class="text-white">Career</p>
                    <p class="text-white">Blog</p>
                  </div>
                  <div class="col-md-3">
                    <h5 class="text-white">Connect</h5>
                    <p class="text-white">Facebook</p>
                    <p class="text-white">Twitter</p>
                    <p class="text-white">Linkedin</p>
                  </div>
                  <div class="col-md-3">
                    <h5 class="text-white">Contact</h5>
                    <p class="text-white">Chat Now</p>
                    <p class="text-white"> <a href="tel:+212 522 205 107" class="text-white">+212 522 205 107</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 offset-md-1">
                <div>
                  <h5 class="text-white">Newsletter</h5>
                  <p class="text-white">Join our weekly mailing list</p>
                  <div class="newsletter">
                    <form action="/newsletter" method="POST" style="position: relative; ">
                      <input type="text" name="newsletter" class="w-100" style="padding: 5px; border-radius: 10px;">
                      <button type="submit" name="enviar" class="btn-celeste-news">Subscribe</button>
                    </form>
                    <div class="w-100"><img src="/images/logo.png" class="float-right mt-4" style="width:120px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
