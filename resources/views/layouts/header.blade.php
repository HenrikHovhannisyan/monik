<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="logo_dark" src="{{ asset('images/logo.png?v=' . time()) }}" alt="logo"/>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-expanded="false"
                >
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
                                            <li class="dropdown-header">Woman's</li>
                                            <li>
                                                <a
                                                    class="dropdown-item nav-link nav_item"
                                                    href="shop-left-sidebar.html"
                                                >Donec porttitor</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Men's</li>
                                            <li>
                                                <a
                                                    class="dropdown-item nav-link nav_item"
                                                    href="shop-cart.html"
                                                >Donec vitae ante ante</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    class="dropdown-item nav-link nav_item"
                                                    href="checkout.html"
                                                >Etiam ac rutrum</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    class="dropdown-item nav-link nav_item"
                                                    href="wishlist.html"
                                                >Quisque condimentum</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    class="dropdown-item nav-link nav_item"
                                                    href="order-completed.html"
                                                >Vivamus in tortor</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Kid's</li>
                                            <li>
                                                <a
                                                    class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail.html"
                                                >Donec vitae facilisis</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Accessories</li>
                                            <li>
                                                <a
                                                    class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail.html"
                                                >Donec vitae facilisis</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="d-lg-flex menu_banners row g-3 px-3">
                                    <div class="col-sm-4 header_banner_content">
                                        <div class="shop_banner">
                                            <img src="{{ asset('images/menu_banner1.jpg') }}" alt="menu_banner1"/>
                                            <div class="banne_info">
                                                <h6 class="shop_subtitle">10% Off</h6>
                                                <h4 class="shop_title">New Arrival</h4>
                                                <a href="index.html#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 header_banner_content">
                                        <div class="header-banner">
                                            <img src="{{ asset('images/menu_banner2.jpg') }}" alt="menu_banner2"/>
                                            <div class="banne_info">
                                                <h6 class="shop_subtitle">15% Off</h6>
                                                <h4 class="shop_title">Men's Fashion</h4>
                                                <a href="index.html#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 header_banner_content">
                                        <div class="header-banner">
                                            <img src="{{ asset('images/menu_banner3.jpg') }}" alt="menu_banner3"/>
                                            <div class="banne_info">
                                                <h6 class="shop_subtitle">23% Off</h6>
                                                <h4 class="shop_title">Kids Fashion</h4>
                                                <a href="index.html#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link nav_item" href="{{ route('contact') }}" title="{{ __("index.contact") }}">
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
                                        <li>
                                            <a class="dropdown-item nav-link nav_item text-success"
                                               href="{{ route('dashboard') }}"
                                               title="{{ __('index.admin-panel') }}">
                                                {{ __('index.admin-panel') }}
                                            </a>
                                        </li>
                                        @if(Auth::user() && Auth::user()->is_admin === 1)
                                            <li>
                                                <a class="dropdown-item nav-link nav_item"
                                                   href="{{ route('dashboard') }}"
                                                   title="{{ __('index.my_account') }}">
                                                    {{ __('index.my_account') }}
                                                </a>
                                            </li>
                                        @endif
                                            <li>
                                                <a class="dropdown-item nav-link nav_item" href="{{ route('logout') }}"
                                                   title="{{ __('index.logout') }}"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('index.logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                    </ul>
                                </div>
                            </li>
                        @endguest
                        <li class="dropdown">
                            @php $lng = config('main.lang.' . App::getLocale()); @endphp
                            <a
                                class="dropdown-toggle nav-link"
                                href="#"
                                data-bs-toggle="dropdown"
                            >
                                <img
                                    src="{{ asset($lng['icon']) }}"
                                    class="rounded-circle"
                                    width="18"
                                    alt="{{ $lng['name'] }}"
                                />
                                {{ $lng['name'] }}
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    @foreach(config('main.lang') as $k => $v)
                                        @if($k !== $lng['key'])
                                            <li>
                                                <a class="dropdown-item nav-link nav_item select-lang" href="/{{ $k }}"
                                                   title="{{ $v['name'] }}" data-lang="{{ $k }}">
                                                    <img
                                                        src="{{ asset($v['icon']) }}"
                                                        class="rounded-circle"
                                                        width="18"
                                                        alt="{{ $v['name'] }}"
                                                    />
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
                            <form>
                                <input
                                    type="text"
                                    placeholder="{{ __("index.search") }}"
                                    class="form-control"
                                    id="search_input"
                                />
                                <button type="submit" class="search_icon">
                                    <i class="ion-ios-search-strong"></i>
                                </button>
                            </form>
                        </div>
                        <div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown">
                        <a class="nav-link cart_trigger" href="index.html#" data-bs-toggle="dropdown" title="{{ __("index.cart") }}">
                            <i class="linearicons-cart"></i>
                            <span class="cart_count">2</span>
                        </a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="index.html#" class="item_remove">
                                        <i class="ion-close"></i>
                                    </a>
                                    <a href="index.html#"><img src="{{ asset('images/cart_thamb1.jpg') }}"
                                                               alt="cart_thumb1"/>
                                        Variable product 001
                                    </a>
                                    <span class="cart_quantity">
                                        1 x
                                        <span class="cart_amount">
                                          <span class="price_symbole">$</span>
                                        </span>
                                        78.00
                                    </span>
                                </li>
                                <li>
                                    <a href="index.html#" class="item_remove">
                                        <i class="ion-close"></i>
                                    </a>
                                    <a href="index.html#">
                                        <img src="{{ asset('images/cart_thamb2.jpg') }}" alt="cart_thumb2"/>
                                        Ornare sed consequat
                                    </a>
                                    <span class="cart_quantity">
                                        1 x
                                        <span class="cart_amount">
                                            <span class="price_symbole">$</span>
                                        </span>
                                        81.00
                                    </span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total">
                                    <strong>Subtotal:</strong>
                                    <span class="cart_price">
                        <span class="price_symbole">$</span></span
                                    >159.00
                                </p>
                                <p class="cart_buttons">
                                    <a
                                        href="shop-cart.html"
                                        class="btn btn-fill-line rounded-0 view-cart"
                                    >View Cart</a
                                    ><a
                                        href="checkout.html"
                                        class="btn btn-fill-out rounded-0 checkout"
                                    >Checkout</a
                                    >
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown cart_dropdown">
                        <a class="nav-link cart_trigger" href="index.html#" data-bs-toggle="dropdown" title="{{ __("index.wish-list") }}">
                            <i class="linearicons-heart"></i>
                            <span class="cart_count">2</span>
                        </a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="index.html#" class="item_remove"
                                    ><i class="ion-close"></i
                                        ></a>
                                    <a href="index.html#"
                                    ><img
                                            src="{{ asset('images/cart_thamb1.jpg') }}"
                                            alt="cart_thumb1"
                                        />Variable product 001</a
                                    >
                                    <span class="cart_quantity">
                        1 x
                        <span class="cart_amount">
                          <span class="price_symbole">$</span></span
                        >78.00</span
                                    >
                                </li>
                                <li>
                                    <a href="index.html#" class="item_remove"
                                    ><i class="ion-close"></i
                                        ></a>
                                    <a href="index.html#"
                                    ><img
                                            src="{{ asset('images/cart_thamb2.jpg') }}"
                                            alt="cart_thumb2"
                                        />Ornare sed consequat</a
                                    >
                                    <span class="cart_quantity">
                        1 x
                        <span class="cart_amount">
                          <span class="price_symbole">$</span></span
                        >81.00</span
                                    >
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total">
                                    <strong>Subtotal:</strong>
                                    <span class="cart_price">
                        <span class="price_symbole">$</span></span
                                    >159.00
                                </p>
                                <p class="cart_buttons">
                                    <a
                                        href="wishlist.html"
                                        class="btn btn-fill-out rounded-0 view-cart"
                                    >View Wishlist</a
                                    >
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->
