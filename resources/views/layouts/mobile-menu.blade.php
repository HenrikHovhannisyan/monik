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
                @foreach($categories as $category)
                    <li class="sidebar-menu-category">
                        <button class="sidebar-accordion-menu" data-accordion-btn>
                            <div class="menu-title-flex">
                                <img
                                    src="{{ asset( $category->image ) }}"
                                    alt="clothes"
                                    width="20"
                                    height="20"
                                    class="menu-title-img"
                                />

                                <p class="menu-title">{{ $category->{lang('name')} }}</p>
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
                                    <data value="300" class="stock" title="Available Stock">300</data>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endforeach
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
