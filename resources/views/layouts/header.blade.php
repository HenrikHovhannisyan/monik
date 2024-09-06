<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="logo_dark" src="{{ asset('images/logo.png?v=' . time()) }}"
                         alt="{{ config('app.name', 'Sofia') }}"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link" href="index.html#" title="{{ __('index.categories') }}"
                               data-bs-toggle="dropdown">
                                {{ __('index.categories') }}
                            </a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">
                                                {{ __("index.boy") }}
                                            </li>
                                            @foreach ($categories->shuffle()->take(5) as $category)
                                                <li>
                                                    <a class="dropdown-item nav-link nav_item"
                                                       href="{{route('products')}}?categories%5B%5D={{ $category->id }}&gender%5B%5D=boy">
                                                        {{ $category->{lang('name')} }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">
                                                {{ __("index.girl") }}
                                            </li>
                                            @foreach ($categories->shuffle()->take(5) as $category)
                                                <li>
                                                    <a class="dropdown-item nav-link nav_item"
                                                       href="{{route('products')}}?categories%5B%5D={{ $category->id }}&gender%5B%5D=girl">
                                                        {{ $category->{lang('name')} }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">
                                                {{ __("index.new") }}
                                            </li>
                                            @foreach ($categories->shuffle()->take(5) as $category)
                                                <li>
                                                    <a class="dropdown-item nav-link nav_item"
                                                       href="{{route('products')}}?categories%5B%5D={{ $category->id }}&status%5B%5D=new">
                                                        {{ $category->{lang('name')} }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">
                                                {{ __("index.sale") }}
                                            </li>
                                            @foreach ($categories->shuffle()->take(5) as $category)
                                                <li>
                                                    <a class="dropdown-item nav-link nav_item"
                                                       href="{{route('products')}}?categories%5B%5D={{ $category->id }}&discount=sale">
                                                        {{ $category->{lang('name')} }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                                <div class="d-lg-flex menu_banners row g-3 px-3">
                                    <div class="col-sm-4 header_banner_content">
                                        <div class="header-banner">
                                            <img src="{{ asset('images/menu_banner1.jpg') }}" alt="menu_banner2"/>
                                            <div class="banne_info">
                                                <h4 class="shop_title">
                                                    {{ __("index.top") }}</h4>
                                                <a href="{{ route('products') }}?status%5B%5D=top">
                                                    {{ __("ad.shop_now") }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 header_banner_content">
                                        <div class="header-banner">
                                            <img src="{{ asset('images/menu_banner2.png') }}" alt="menu_banner2"/>
                                            <div class="banne_info">
                                                <h6 class="shop_subtitle">
                                                    {{ __("index.sale") }}
                                                </h6>
                                                <h4 class="shop_title">
                                                    {{ __("index.boy") }}</h4>
                                                <a href="{{ route('products') }}?gender%5B%5D=boy&discount=sale">
                                                    {{ __("ad.shop_now") }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 header_banner_content">
                                        <div class="header-banner">
                                            <img src="{{ asset('images/menu_banner3.png') }}" alt="menu_banner3"/>
                                            <div class="banne_info">
                                                <h6 class="shop_subtitle">
                                                    {{ __("index.sale") }}
                                                </h6>
                                                <h4 class="shop_title">
                                                    {{ __("index.girl") }}
                                                </h4>
                                                <a href="{{ route('products') }}?gender%5B%5D=girl&discount=sale">
                                                    {{ __("ad.shop_now") }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link nav_item" href="{{ route('contact') }}"
                               title="{{ __("index.contact") }}">
                                {{ __("index.contact") }}
                            </a>
                        </li>
                        @guest
                            <li>
                                <a class="nav-link nav_item" href="{{ route('login') }}">
                                    <i class="ti-user"></i>
                                    {{ __('index.login') }}
                                </a>
                            </li>
                        @else
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown"
                                   title="{{ Auth::user()->name }}">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu">
                                    <ul>
                                        @if(Auth::user() && Auth::user()->is_admin === 1)
                                            <li>
                                                <a class="dropdown-item nav-link nav_item text-success"
                                                   href="{{ route('dashboard') }}"
                                                   title="{{ __('index.admin-panel') }}">
                                                    {{ __('index.admin-panel') }}
                                                </a>
                                            </li>
                                        @endif
                                        <li>
                                            <a class="dropdown-item nav-link nav_item" href="{{ route('account') }}"
                                               title="{{ __('index.my_account') }}">
                                                {{ __('index.my_account') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item nav-link nav_item" href="{{ route('logout') }}"
                                               title="{{ __('index.logout') }}" data-bs-toggle="modal"
                                               data-bs-target="#logoutModal">
                                                {{ __('index.logout') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endguest
                        <li class="dropdown">
                            @php $lng = config('main.lang.' . App::getLocale()); @endphp
                            <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">
                                <img src="{{ asset($lng['icon']) }}" class="rounded-circle" width="18" alt="{{ $lng['name'] }}"/>
                                {{ $lng['name'] }}
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    @foreach(config('main.lang') as $k => $v)
                                        @if($k !== $lng['key'])
                                            <li>
                                                <a class="dropdown-item nav-link nav_item select-lang" href="/{{ $k }}"
                                                   title="{{ $v['name'] }}" data-lang="{{ $k }}">
                                                    <img src="{{ asset($v['icon']) }}" class="rounded-circle" width="18" alt="{{ $v['name'] }}"/>
                                                    {{ $v['name'] }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li>
                        <a href="javascript:;" class="nav-link search_trigger" title="{{ __("index.search") }}">
                            <i class="linearicons-magnifier"></i>
                        </a>
                        <div class="search_wrap">
                            <span class="close-search">
                                <i class="ion-ios-close-empty"></i>
                             </span>
                            <form action="{{ route('search') }}" method="GET">
                                <input type="text" placeholder="{{ __("index.search") }}" class="form-control" id="search_input" name="search"/>
                                <button type="submit" class="search_icon">
                                    <i class="ion-ios-search-strong"></i>
                                </button>
                            </form>
                        </div>
                        <div class="search_overlay"></div>
                    </li>
                    <li>
                        <a class="nav-link nav_item" href="{{ route('cart.index') }}" title="{{ __("index.cart") }}">
                            <i class="linearicons-cart"></i>
                            <span class="cart_count">{{ $cartItems->count() }}</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->
