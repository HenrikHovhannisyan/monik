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

        <div class="header-main">
            <div class="container">
                <a href="{{ route('home') }}" class="header-logo">
                    <img
                        src="./images/logo1.png"
                        alt="Anon's logo"
                        width="120"
                        height="36"
                    />
                </a>

                <div class="header-search-container">
                    <input
                        type="search"
                        name="search"
                        class="search-field"
                        placeholder="Enter your product name..."
                    />

                    <button class="search-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </div>

                <div class="header-user-actions">
                    <button class="action-btn">
                        <ion-icon name="person-outline"></ion-icon>
                    </button>

                    <button class="action-btn">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span class="count">0</span>
                    </button>

                    <button class="action-btn">
                        <ion-icon name="bag-handle-outline"></ion-icon>
                        <span class="count">0</span>
                    </button>
                </div>
            </div>
        </div>

        <nav class="desktop-navigation-menu">
            <div class="container">
                <ul class="desktop-menu-category-list">
                    <li class="menu-category">
                        <a href="{{ route('home') }}" class="menu-title">{{ __('index.home') }}</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">
                            {{ __('index.products') }}
                        </a>

                        <div class="dropdown-panel">
                            <ul class="dropdown-panel-list">
                                <li class="menu-title">
                                    <a href="#">Electronics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Desktop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Laptop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Camera</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Tablet</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Headphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img
                                            src="./images/electronics-banner-1.jpg"
                                            alt="headphone collection"
                                            width="250"
                                            height="119"
                                        />
                                    </a>
                                </li>
                            </ul>

                            <ul class="dropdown-panel-list">
                                <li class="menu-title">
                                    <a href="#">Men's</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Formal</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Casual</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Sports</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Jacket</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Sunglasses</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img
                                            src="./images/mens-banner.jpg"
                                            alt="men's fashion"
                                            width="250"
                                            height="119"
                                        />
                                    </a>
                                </li>
                            </ul>

                            <ul class="dropdown-panel-list">
                                <li class="menu-title">
                                    <a href="#">Women's</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Formal</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Casual</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Perfume</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Cosmetics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Bags</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img
                                            src="./images/womens-banner.jpg"
                                            alt="women's fashion"
                                            width="250"
                                            height="119"
                                        />
                                    </a>
                                </li>
                            </ul>

                            <ul class="dropdown-panel-list">
                                <li class="menu-title">
                                    <a href="#">Electronics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart Watch</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart TV</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Keyboard</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Mouse</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Microphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img
                                            src="./images/electronics-banner-2.jpg"
                                            alt="mouse collection"
                                            width="250"
                                            height="119"
                                        />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">{{ __('index.about_us') }}</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="mobile-bottom-navigation">
            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <a href="{{ route('home') }}" class="action-btn">
                <ion-icon name="home-outline"></ion-icon>
            </a>

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="bag-handle-outline"></ion-icon>

                <span class="count">0</span>
            </button>

        </div>

        <nav class="mobile-navigation-menu has-scrollbar" data-mobile-menu>
            <div class="menu-top">
                <h2 class="menu-title">Menu</h2>

                <button class="menu-close-btn" data-mobile-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>

            <ul class="mobile-menu-category-list">
                <li class="menu-category">
                    <a href="{{ route('home') }}" class="menu-title">{{ __('index.home') }}</a>
                </li>
                <li class="menu-category">
                    <a href="#" class="menu-title">{{ __('index.about_us') }}</a>
                </li>
                <li class="menu-category">
                    <p class="menu-title">{{ __('index.products') }}</p>
                    <ul class="sidebar-menu-category-list">
                        <li class="sidebar-menu-category">
                            <button class="sidebar-accordion-menu" data-accordion-btn>
                                <div class="menu-title-flex">
                                    <img
                                        src="./images/icons/dress.svg"
                                        alt="clothes"
                                        width="20"
                                        height="20"
                                        class="menu-title-img"
                                    />

                                    <p class="menu-title">Clothes</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon
                                        name="remove-outline"
                                        class="remove-icon"
                                    ></ion-icon>
                                </div>
                            </button>

                            <ul class="sidebar-submenu-category-list" data-accordion>
                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Shirt</p>
                                        <data value="300" class="stock" title="Available Stock"
                                        >300
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">shorts & jeans</p>
                                        <data value="60" class="stock" title="Available Stock"
                                        >60
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">jacket</p>
                                        <data value="50" class="stock" title="Available Stock"
                                        >50
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">dress & frock</p>
                                        <data value="87" class="stock" title="Available Stock"
                                        >87
                                        </data
                                        >
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-category">
                            <button class="sidebar-accordion-menu" data-accordion-btn>
                                <div class="menu-title-flex">
                                    <img
                                        src="./images/icons/shoes.svg"
                                        alt="footwear"
                                        class="menu-title-img"
                                        width="20"
                                        height="20"
                                    />

                                    <p class="menu-title">Footwear</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon
                                        name="remove-outline"
                                        class="remove-icon"
                                    ></ion-icon>
                                </div>
                            </button>

                            <ul class="sidebar-submenu-category-list" data-accordion>
                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Sports</p>
                                        <data value="45" class="stock" title="Available Stock"
                                        >45
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Formal</p>
                                        <data value="75" class="stock" title="Available Stock"
                                        >75
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Casual</p>
                                        <data value="35" class="stock" title="Available Stock"
                                        >35
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Safety Shoes</p>
                                        <data value="26" class="stock" title="Available Stock"
                                        >26
                                        </data
                                        >
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-category">
                            <button class="sidebar-accordion-menu" data-accordion-btn>
                                <div class="menu-title-flex">
                                    <img
                                        src="./images/icons/jewelry.svg"
                                        alt="clothes"
                                        class="menu-title-img"
                                        width="20"
                                        height="20"
                                    />

                                    <p class="menu-title">Jewelry</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon
                                        name="remove-outline"
                                        class="remove-icon"
                                    ></ion-icon>
                                </div>
                            </button>

                            <ul class="sidebar-submenu-category-list" data-accordion>
                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Earrings</p>
                                        <data value="46" class="stock" title="Available Stock"
                                        >46
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Couple Rings</p>
                                        <data value="73" class="stock" title="Available Stock"
                                        >73
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Necklace</p>
                                        <data value="61" class="stock" title="Available Stock"
                                        >61
                                        </data
                                        >
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-category">
                            <button class="sidebar-accordion-menu" data-accordion-btn>
                                <div class="menu-title-flex">
                                    <img
                                        src="./images/icons/perfume.svg"
                                        alt="perfume"
                                        class="menu-title-img"
                                        width="20"
                                        height="20"
                                    />

                                    <p class="menu-title">Perfume</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon
                                        name="remove-outline"
                                        class="remove-icon"
                                    ></ion-icon>
                                </div>
                            </button>

                            <ul class="sidebar-submenu-category-list" data-accordion>
                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Clothes Perfume</p>
                                        <data value="12" class="stock" title="Available Stock"
                                        >12 pcs
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Deodorant</p>
                                        <data value="60" class="stock" title="Available Stock"
                                        >60 pcs
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">jacket</p>
                                        <data value="50" class="stock" title="Available Stock"
                                        >50 pcs
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">dress & frock</p>
                                        <data value="87" class="stock" title="Available Stock"
                                        >87 pcs
                                        </data
                                        >
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-category">
                            <button class="sidebar-accordion-menu" data-accordion-btn>
                                <div class="menu-title-flex">
                                    <img
                                        src="./images/icons/cosmetics.svg"
                                        alt="cosmetics"
                                        class="menu-title-img"
                                        width="20"
                                        height="20"
                                    />

                                    <p class="menu-title">Cosmetics</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon
                                        name="remove-outline"
                                        class="remove-icon"
                                    ></ion-icon>
                                </div>
                            </button>

                            <ul class="sidebar-submenu-category-list" data-accordion>
                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Shampoo</p>
                                        <data value="68" class="stock" title="Available Stock"
                                        >68
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Sunscreen</p>
                                        <data value="46" class="stock" title="Available Stock"
                                        >46
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Body Wash</p>
                                        <data value="79" class="stock" title="Available Stock"
                                        >79
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Makeup Kit</p>
                                        <data value="23" class="stock" title="Available Stock"
                                        >23
                                        </data
                                        >
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-category">
                            <button class="sidebar-accordion-menu" data-accordion-btn>
                                <div class="menu-title-flex">
                                    <img
                                        src="./images/icons/glasses.svg"
                                        alt="glasses"
                                        class="menu-title-img"
                                        width="20"
                                        height="20"
                                    />

                                    <p class="menu-title">Glasses</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon
                                        name="remove-outline"
                                        class="remove-icon"
                                    ></ion-icon>
                                </div>
                            </button>

                            <ul class="sidebar-submenu-category-list" data-accordion>
                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Sunglasses</p>
                                        <data value="50" class="stock" title="Available Stock"
                                        >50
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Lenses</p>
                                        <data value="48" class="stock" title="Available Stock"
                                        >48
                                        </data
                                        >
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-category">
                            <button class="sidebar-accordion-menu" data-accordion-btn>
                                <div class="menu-title-flex">
                                    <img
                                        src="./images/icons/bag.svg"
                                        alt="bags"
                                        class="menu-title-img"
                                        width="20"
                                        height="20"
                                    />

                                    <p class="menu-title">Bags</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon
                                        name="remove-outline"
                                        class="remove-icon"
                                    ></ion-icon>
                                </div>
                            </button>

                            <ul class="sidebar-submenu-category-list" data-accordion>
                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Shopping Bag</p>
                                        <data value="62" class="stock" title="Available Stock"
                                        >62
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Gym Backpack</p>
                                        <data value="35" class="stock" title="Available Stock"
                                        >35
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Purse</p>
                                        <data value="80" class="stock" title="Available Stock"
                                        >80
                                        </data
                                        >
                                    </a>
                                </li>

                                <li class="sidebar-submenu-category">
                                    <a href="#" class="sidebar-submenu-title">
                                        <p class="product-name">Wallet</p>
                                        <data value="75" class="stock" title="Available Stock"
                                        >75
                                        </data
                                        >
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="menu-bottom">
                <ul class="menu-category-list">
                    @guest
                        @if (Route::has('login'))
                            <a class="menu-title" href="{{ route('login') }}">{{ __( 'index.login' ) }}</a>
                        @endif

                        {{-- @if (Route::has('register'))
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                             </li>
                         @endif--}}
                    @else
                        <li class="menu-category">
                            <button class="accordion-menu" data-accordion-btn>
                                <p class="menu-title">{{ Auth::user()->name }}</p>

                                <ion-icon
                                    name="caret-back-outline"
                                    class="caret-back"
                                ></ion-icon>
                            </button>

                            <ul class="submenu-category-list" data-accordion>
                                <li class="submenu-category">
                                    <a class="submenu-title" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __( 'index.logout' ) }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>

                                {{--<li class="submenu-category">
                                    <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                                </li>--}}
                            </ul>
                        </li>
                    @endguest

                    <li class="menu-category">
                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">{{ $lng['name'] }}</p>
                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>
                            @foreach(config('main.lang') as $k => $v)
                                @if($k !== $lng['key'])
                                    <li class="submenu-category">
                                        <a class="select-lang submenu-title" href="/{{ $k }}" title="{{ $v['name'] }}"
                                           data-lang="{{ $k }}">
                                            {{ $v['name'] }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>

                <ul class="menu-social-container">
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
</div>

@yield('script')
</body>
</html>
