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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href={{ route('home') }}>
                    {{ __('language.DASHBOARD') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        @if (Auth::user() && Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin') }}">{{ __('language.ADMINS') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('message') }}">{{ __('language.MESSAGES') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-success"
                                    href="{{ route('createuser') }}">{{ __('language.ADDADMINDOCTOR') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary ml-3"
                                    href="{{ route('pass') }}">{{ __('language.CHANGEMYPASSWORD') }}</a>
                            </li>
                        @endif

                        @if (Auth::user() && Auth::user()->role == 'patient')
                            <li class="nav-item">
                                <a class="nav-link btn btn-success ml-3"
                                    href="{{ route('profedit', Auth::user()->id) }}">{{ __('language.UPDATEMYPROFILE') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary ml-3"
                                    href="{{ route('passpatient') }}">{{ __('language.CHANGEMYPASSWORD') }}</a>
                            </li>
                        @endif

                        @if (Auth::user() && Auth::user()->role == 'doctor')
                            <li class="nav-item">
                                <a class="nav-link ml-3 btn btn-success"
                                    href="{{ route('editdoctor', Auth::user()->id) }}">{{ __('language.UPDATEMYPROFILE') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary ml-3"
                                    href="{{ route('password') }}">{{ __('language.CHANGEMYPASSWORD') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ml-3 btn btn-warning"
                                    href="{{ route('editdays', Auth::user()->id) }}">{{ __('language.UPDATEMYDAYS') }}</a>
                            </li>
                        @endif
                        

                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="nav-item">
                                <a class="nav-link" rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>

</html>
