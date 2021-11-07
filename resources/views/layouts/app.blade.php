<!doctype html>
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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- ---------------------------------------------------------------------------------- -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <!-- Template Stylesheet -->
    <!-- <link href="/dachboardStyle.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('/css/dachboardStyle.css') }}">
    <!-- ---------------------------------------------------------------------------------- -->
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-md-2">
                <img src="img/logo.png" alt="Hero Image" width="60px" style="margin-left:4em;" class="mb-4">
                <ul class="list-group">
                    <a href="/home">
                        <li class="itemo" id="itmFirst"><i class="fa fa-home"></i>&nbsp;Welcome </li>
                    </a>
                    <a href="/add-hero">
                        <li class="itemo"><i class="fa fa-align-left"></i>&nbsp; Hero </li>
                    </a>
                    <a href="/add-service">
                        <li class="itemo"><i class="fa fa-cubes"></i>&nbsp; Services </li>
                    </a>
                    <a href="/portfolio">
                        <li class="itemo"><i class="fa fa-laptop"></i>&nbsp;Portfolio </li>
                    </a>
                    <a href="/discount">
                        <li class="itemo"><i class="fa fa-arrow-circle-down"></i>&nbsp;Discount </li>
                    </a>
                    <a href="/plan">
                        <li class="itemo"><i class="fa fa-donate"></i>&nbsp;&nbsp;Plans </li>
                    </a>
                    <a href="/add-Stack">
                        <li class="itemo"><i class="fa fa-layer-group"></i>&nbsp;&nbsp;Stack </li>
                    </a>
                    <a href="/contact">
                        <li class="itemo"><i class="fa fa-address-book"></i>&nbsp;&nbsp;Contacts</li>
                    </a>
                    <a href="">
                        <li class="itemo" id="itmLast"><i class="fa fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</li>
                    </a>
                </ul>
            </div>
            <div class="content col-md-10 mt-3">
                @yield('content')
            </div>
        </div>
    </div>


</body>

</html>