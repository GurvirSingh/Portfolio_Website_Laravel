<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name','Gurvir')}}</title>
    <link rel="stylesheet" href="{{asset('portfolio.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1 id="name" class="animated fadeInLeft slow">Gurvir Singh Tarlok Singh Bhogal</h1>

        <nav id='nav_bar'>
            <ul>
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
                {{-- <a href="/login" >
                    <li>LOGIN</li>
                </a>
                <a href="/signup/create">
                    <li>SIGNUP</li>
                </a> --}}
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                </li>
                
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                    </li>
                @endif

                @else
                            <li class="nav-item dropdown">
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> --}}

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('LOGOUT') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        @endguest


                <a href="#" onclick="more()" class="nav_more">
                    <li>MORE <i class="fas fa-chevron-down"></i></li>
                </a>
            </ul>
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

    <main>
       @yield('content')
    </main>

    <footer>
        <p>Gurvir Singh Tarlok Singh Bhogal &copy; 2019-2020</p>
        <p id="footer_links">
            <a href="https://www.github.com/GurvirSingh"><i class="fab fa-github"></i></a>
            <a href="https://www.facebook.com/gurveer5"><i class="fab fa-facebook"></i> </a>
            <a href="https://www.slack.com"><i class="fab fa-slack"></i></a>
            <a href="https://www.gmail.com"><i class="fab fa-google"></i></a>
        </p>
    </footer>

    <script src="https://kit.fontawesome.com/a6a69373e3.js" crossorigin="anonymous"></script>

</body>

</html>