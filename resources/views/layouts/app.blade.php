<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Sofia') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    {{--  Styles  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/root.css?v=' . time())}}">
    <link rel="stylesheet" href="{{asset('css/main.css?v=' . time())}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css?v=' . time())}}">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script defer src="{{asset('js/app.js')}}"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm position-fixed w-100 z-3">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Sofia logo" height="55">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{isActiveRoute('home')}}" href="{{ route('home') }}">
                            {{ __('index.home') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('index.products') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('index.about_us') }}
                        </a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        @php $lng = config('main.lang.' . App::getLocale()); @endphp
                        <div class="dropdown">
                            <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img width="22" src="{{ asset($lng['icon']) }}" alt="{{ $lng['name'] }}">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-images">
                                @foreach(config('main.lang') as $k => $v)
                                    @if($k !== $lng['key'])
                                        <li>
                                            <a class="dropdown-item select-lang" href="/{{ $k }}" title="{{ $v['name'] }}" data-lang="{{ $k }}">
                                                <img width="22" src="{{ asset($v['icon']) }}" alt="{{ $v['name'] }}">
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item dropdown">
                            <a id="authDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="authDropdown">
                                @if (Route::has('login'))
                                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @endif
                                @if (Route::has('register'))
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </div>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if(Auth::user() && Auth::user()->is_admin === 1)
                                    <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                                @endif
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

    <main>
        @yield('content')
    </main>
    @yield('script')
</div>
</body>
</html>
