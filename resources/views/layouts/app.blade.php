@php $lng = config('main.lang.' . App::getLocale()); @endphp
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sofia') }} @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />

    {{--  Styles  --}}
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"--}}
    {{--          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('style')

<!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"--}}
    {{--            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"--}}
    {{--            crossorigin="anonymous"></script>--}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script defer src="{{asset('js/app.js')}}"></script>
</head>
<body>
<div id="app">


    <div class="overlay" data-overlay></div>

    <!--
    - MODAL
  -->

{{--<div class="modal" data-modal>
    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">
        <button class="modal-close-btn" data-modal-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="newsletter-img">
            <img
                src="./images/newsletter.png"
                alt="subscribe newsletter"
                width="400"
                height="400"
            />
        </div>

        <div class="newsletter">
            <form action="#">
                <div class="newsletter-header">
                    <h3 class="newsletter-title">Subscribe Newsletter.</h3>

                    <p class="newsletter-desc">
                        Subscribe the <b>Anon</b> to get latest products and discount
                        update.
                    </p>
                </div>

                <input
                    type="email"
                    name="email"
                    class="email-field"
                    placeholder="Email Address"
                    required
                />

                <button type="submit" class="btn-newsletter">Subscribe</button>
            </form>
        </div>
    </div>
</div>--}}

<!--
    - NOTIFICATION TOAST
  -->

    <div class="notification-toast" data-toast>
        <button class="toast-close-btn" data-toast-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="toast-banner">
            <img
                src="./images/products/jewellery-1.jpg"
                alt="Rose Gold Earrings"
                width="80"
                height="70"
            />
        </div>

        <div class="toast-detail">
            <p class="toast-message">Someone in new just bought</p>

            <p class="toast-title">Rose Gold Earrings</p>

            <p class="toast-meta">
                <time datetime="PT2M">2 Minutes</time>
                ago
            </p>
        </div>
    </div>

    <!--
    - HEADER
  -->

    <header>
        <div class="header-top">
            <div class="container">
                <ul class="header-social-container">
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                </ul>

                <div class="header-alert-news">
                    <p>
                        <b>Free Shipping</b>
                        This Week Order Over - $55
                    </p>
                </div>

                <div class="header-top-actions">
                    <div class="dropdown">
                        <button class="dropbtn">
                            {{ $lng['name'] }}
                        </button>
                        <div class="dropdown-content">
                            @foreach(config('main.lang') as $k => $v)
                                @if($k !== $lng['key'])
                                    <a class="select-lang" href="/{{ $k }}" title="{{ $v['name'] }}"
                                       data-lang="{{ $k }}">
                                        {{ $v['name'] }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    @guest
                        @if (Route::has('login'))
                            <a class="dropbtn" href="{{ route('login') }}">{{ __( 'index.login' ) }}</a>
                        @endif

                        {{-- @if (Route::has('register'))
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                             </li>
                         @endif--}}
                    @else
                        <div class=" dropdown">
                            <a class="dropbtn" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-content">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __( 'index.logout' ) }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </div>

        @include('layouts.header-main')

        @include('layouts.desktop-menu')

        @include('layouts.mobile-header')

        @include('layouts.mobile-menu')

        @include('layouts.basket')
    </header>

    <main class="py-4">
        @yield('content')
    </main>
</div>

@yield('script')
</body>
</html>
