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
