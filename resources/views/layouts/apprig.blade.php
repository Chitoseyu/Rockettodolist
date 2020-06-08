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


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        h1
        {
            font-size: 72px;
        }
        h3
        {
            font-size: 18px;
        }
        body
        {
            background-color: #ECD715;
            font-size-base: 1.5rem;
            padding-right: 5%;
            padding-left: 5%;
        }
        p
        {
            font-size: 24px;
        }
    </style>
</head>
<body class="p-6">
<div  class="container-fluid" id="app-3" >
    <nav class="navbar navbar-expand-md  navbar-light shadow-sm" style="background-color: #ECD715;">
        <div class="container  align-items-end">
            <a class="navbar-brand " href="">
                <h1 class=".text-dark-left  ">Register</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

        {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
        {{--<!-- Left Side Of Navbar -->--}}
        {{--<ul class="navbar-nav mr-auto">--}}

        {{--</ul>--}}
        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h3 class="text-white"></h3>
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
</div>
</nav>

<main class="py-0">
    @yield('content')
</main>
</div>
</body>
</html>
