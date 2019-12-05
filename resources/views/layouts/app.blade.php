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
    <link rel="stylesheet" href="{{asset('portfolio.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                        <h1 id="name" class="animated fadeInLeft slow">Gurvir Singh Tarlok Singh Bhogal</h1>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul  id='nav_bar' class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                                <a href="/">
                                    <li>HOME</li>
                                </a>
                                <a href="/about">
                                    <li>ABOUT ME</li>
                                </a>
                                <a href="/skills">
                                    <li>SKILLS</li>
                                </a>
                                <a href="/portfolio" class="collapse">
                                    <li>PORTFOLIO</li>
                                </a>
                                <a href="/recommendation" class="collapse">
                                    <li>RECOMMENDATION</li>
                                </a>
                                <a href="http://www.gurvirbhogal.uta.cloud/blog/" class="collapse">
                                    <li>BLOG</li>
                                </a>
                                <a href="/hire_me" class="collapse">
                                    <li>HIRE ME</li>
                                </a>
                                <a href="/contact" class="collapse">
                                    <li>CONTACT</li>
                                </a>
                                <a href="/login" <?php if(isset($_SESSION['email'])) { echo 'class="none"';}?>>
                                    <li>LOGIN</li>
                                </a>
                                <a href="/signup/create" <?php if(isset($_SESSION['email'])) { echo 'class="none"';}?>>
                                    <li>SIGNUP</li>
                                </a>
                                <a href="#" onclick="more()" class="nav_more">
                                    <li>MORE <i class="fas fa-chevron-down"></i></li>
                                </a>
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                        </nav>
                    </header>
                
                    <div id="menu">
                            <ul style="list-style-type: none;">
                                    <a href="portfolio.html" >
                                            <li>PORTFOLIO</li>
                                        </a>
                            <a href="/recommendation">
                                <li>RECOMMENDATION</li>
                            </a>
                            <a href="http://www.gurvirbhogal.uta.cloud/blog/" class="collapse">
                                <li>BLOG</li>
                            </a>
                            <a href="/hire_me">
                                <li>HIRE ME</li>
                            </a>
                            <a href="/contact">
                                <li>CONTACT</li>
                            </a>
                            <a>
                            <a href="/login" <?php if(isset($_SESSION['email'])) { echo 'class="none"';}?>>
                                <li>LOGIN</li>
                            </a>
                            <a href="/signup" <?php if(isset($_SESSION['email'])) { echo 'class="none"';}?>>
                                <li>SIGNUP</li>
                            </a>
                            <?php 
                                    if(isset($_SESSION['email']))
                                    { 
                                        echo "<a href='logout.php'>
                                        <li>LOG OUT</li>
                                        </a>";
                                    }
                                ?>
                        </ul>
                        </div>
                            
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
