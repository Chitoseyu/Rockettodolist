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
        *
        {
            font-size: 24px;
            padding: 0;
            margin: 0;
        }
        h1
        {
            margin: 0;
            font-size: 72px;
        }
        h3
        {
            margin: 0;
            font-size: 18px;
        }
        body,html
        {
            height: 100%;
        }
        label
        {
            margin: 0;
            padding: 0;

        }

        .btn-primary
        {
            color:#1C456A;
        }
        .container
        {
            background: #ECD715;
            height: 90%;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div  class="container">
        @yield('regTitle')
    </div>
    </header>
    <div  class="container">
        @yield('content')
    </div>
</body>
</html>
