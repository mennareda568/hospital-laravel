<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Hospital management System </title>

    <link rel="shortcut icon" href={{ asset('img/fav.jpg') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/fontawsom-all.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/animate.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/style.css') }} />
</head>

<body>

    <main>

        <!-- ################# Header Starts Here#######################--->

        <header id="menu-jk">

            <div id="nav-head" class="header-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-3  col-sm-12"
                            style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;">HMS
                            <a data-toggle="collapse" data-target="#menu" href="#menu"><i
                                    class="fas d-block d-md-none small-menu fa-bars"></i></a>
                        </div>
                        <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#contact_us">Contact Us</a></li>
                                @guest
                                    <li>
                                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}">Register As Patient</a>
                                        </li>
                                    @endif
                                @else
                                    <li>
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                 

                                @endguest

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </header>


        <section>
            @yield('content')
        </section>

    </main>



    <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>


    </footer>
</body>

<script src={{ asset('js/jquery-3.2.1.min.js') }}></script>
<script src={{ asset('js/popper.min.js') }}></script>
<script src={{ asset('js/bootstrap.min.js') }}></script>
<script src={{ asset('plugins/scroll-nav/js/jquery.easing.min.js') }}></script>
<script src={{ asset('plugins/scroll-nav/js/scrolling-nav.js') }}></script>
<script src={{ asset('plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}></script>

<script src={{ asset('js/script.js') }}></script>



</html>
