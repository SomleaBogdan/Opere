<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="main-navbar sticky-top bg-white">
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0" style="height:60px;">
                <div style="float:left; height:100%; margin-right:25px;">
                    <div style="text-allign:center; width: 100%; margin-left:100px; margin-top:10px;">   
                        
                    </div>
                </div>
                <div style="float:right; height:100%;">
                    <div class="container h-100" style="margin-right:110px;">
                    @if (Auth::check())
                        <a class="btn btn-light btn-outline-dark" style="margin-top:10px;" href="{{route('adminIndex')}}">Administrare Cont</a>
                    @else
                        <a class="btn btn-light btn-outline-dark" style="margin-top:10px;" href="{{route('login')}}">Autentificare</a>
                    @endif
                        <a class="btn btn-success" style="margin-top:10px;" href="{{route('anunturi.create')}}">Adauga Anunt</a>
                    </div>
                </div>
            </nav>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
