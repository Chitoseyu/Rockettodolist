<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RocketTodoList</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/187700dfeb.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        *
        {
            font-size: 24px;
            padding: 0;
            margin: 0;
        }
        body,html
        {
            height: 100%;
        }
        h1
        {
            font-size: 72px;
            margin: 0;
        }
        h3
        {
            font-size: 18px;
            margin: 0;
        }
        img
        {
            margin: 0;
            position: center;
            transform: rotate(40deg);
        }
        a
        {
            padding: 0;
            margin: 0;
        }
        .container
        {
            background: #ECD715;
            height: 90%;
            align-items: stretch;
        }
        p
        {
            padding: 2px;
            margin: 0;
        }
    </style>
</head>
<body>
      <header>
          <div class="container">
              @yield('homeTitle')
          </div>
          {{--<nav class="navbar navbar-expand-md  navbar-light shadow-sm">--}}
              {{--<div class="container  align-items-end">--}}
                  {{--<a class="navbar-brand " href="{{ url('/') }}">--}}
                      {{--<h1 class=".text-dark-left  ">Welcome to U memo</h1>--}}
                  {{--</a>--}}
                  {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                      {{--<span class="navbar-toggler-icon"></span>--}}
                  {{--</button>--}}

                  {{--<ul class="navbar-nav ml-auto">--}}
                      {{--<!-- Authentication Links -->--}}
                      {{--@guest--}}
                          {{--<li class="nav-item">--}}
                              {{--<a class="nav-link" href="{{ route('register') }}">--}}
                                  {{--<h3 class="text-white">Register</h3>--}}
                              {{--</a>--}}
                          {{--</li>--}}
                          {{--<li class="nav-item">--}}
                              {{--<a class="nav-link" href="{{ route('login') }}">--}}
                                  {{--<p class="text-dark">Login</p>--}}
                              {{--</a>--}}
                          {{--</li>--}}
                      {{--@else--}}
                          {{--<li class="nav-item dropdown">--}}
                              {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                  {{--{{ Auth::user()->username }} <span class="caret"></span>--}}
                              {{--</a>--}}
                              {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                  {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                     {{--onclick="event.preventDefault();--}}
                                                                 {{--document.getElementById('logout-form').submit();">--}}
                                      {{--logout--}}
                                  {{--</a>--}}
                                  {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                      {{--@csrf--}}
                                  {{--</form>--}}
                              {{--</div>--}}
                          {{--</li>--}}
                      {{--@endguest--}}
                  {{--</ul>--}}
              {{--</div>--}}
              {{--</div>--}}
          {{--</nav>--}}
      </header>
      <div  class="container" style="overflow: auto;">
              @yield('content')
      </div>
</body>
</html>
