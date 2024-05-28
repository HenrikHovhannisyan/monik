<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="Henrik" name="author" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
        name="description"
        content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods."
    />
    <meta
        name="keywords"
        content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store"
    />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Sofia') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css?v=' . time())}}" />
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css?v=' . time())}}" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"/>
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('css/all.min.css?v=' . time())}}" />
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css?v=' . time())}}" />
    <link rel="stylesheet" href="{{asset('css/themify-icons.css?v=' . time())}}" />
    <link rel="stylesheet" href="{{asset('css/linearicons.css?v=' . time())}}" />
    <link rel="stylesheet" href="{{asset('css/simple-line-icons.css?v=' . time())}}" />
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{asset('owlcarousel/css/owl.carousel.min.css?v=' . time())}}" />
    <link rel="stylesheet" href="{{asset('owlcarousel/css/owl.theme.css?v=' . time())}}" />
    <link rel="stylesheet" href="{{asset('owlcarousel/css/owl.theme.default.min.css?v=' . time())}}"/>
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css?v=' . time())}}" />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('css/slick.css?v=' . time())}}" />
    <link rel="stylesheet" href="{{asset('css/slick-theme.css?v=' . time())}}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/root.css?v=' . time())}}">
    <link rel="stylesheet" href="{{asset('css/main.css?v=' . time())}}">
    <link rel="stylesheet" href="{{asset('css/style.css?v=' . time())}}" />
    <link rel="stylesheet" href="{{asset('css/responsive.css?v=' . time())}}">

    <!-- Latest jQuery -->
    <script defer src="{{asset('js/jquery-3.7.1.min.js?v=' . time())}}"></script>
    <!-- popper min js -->
    <script defer src="{{asset('js/popper.min.js?v=' . time())}}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script defer src="{{asset('bootstrap/js/bootstrap.min.js?v=' . time())}}"></script>
    <!-- owl-carousel min js  -->
    <script defer src="{{asset('owlcarousel/js/owl.carousel.min.js?v=' . time())}}"></script>
    <!-- magnific-popup min js  -->
    <script defer src="{{asset('js/magnific-popup.min.js?v=' . time())}}"></script>
    <!-- waypoints min js  -->
    <script defer src="{{asset('js/waypoints.min.js?v=' . time())}}"></script>
    <!-- parallax js  -->
    <script defer src="{{asset('js/parallax.js?v=' . time())}}"></script>
    <!-- countdown js  -->
    <script defer src="{{asset('js/jquery.countdown.min.js?v=' . time())}}"></script>
    <!-- imagesloaded js -->
    <script defer src="{{asset('js/imagesloaded.pkgd.min.js?v=' . time())}}"></script>
    <!-- isotope min js -->
    <script defer src="{{asset('js/isotope.min.js?v=' . time())}}"></script>
    <!-- slick js -->
    <script defer src="{{asset('js/slick.min.js?v=' . time())}}"></script>
    <!-- elevatezoom js -->
    <script defer src="{{asset('js/jquery.elevatezoom.js?v=' . time())}}"></script>
    <!-- scripts js -->
    <script defer src="{{asset('js/scripts.js?v=' . time())}}"></script>
    <script defer src="{{asset('js/app.js?v=' . time())}}"></script>
</head>
<body>
<div id="app">
    {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm position-fixed w-100 z-3">
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
    </nav>--}}

    @include('vendor.ad')
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')

    <a href="#" class="scrollup" style="display: none">
        <i class="ion-ios-arrow-up"></i>
    </a>
    @yield('script')
</div>
</body>
</html>
