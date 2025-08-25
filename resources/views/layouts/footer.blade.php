<!-- START FOOTER -->
<footer class="footer_dark">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="footer_logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name', 'Monik') }}" title="{{ config('app.name', 'Monik') }}" />
                            </a>
                        </div>
                        <p>
                            <b>{{ __('messages.comfort_and_style') }}</b>
                        </p>
                        <button class="btn btn-fill-out btn-sm" id="installBtn" style="display: none;">
                            <i class="fa-solid fa-download"></i>
                            {{ __("index.install_app") }}
                        </button>
                    </div>
                    <div class="widget">
                        <ul class="social_icons social_white">
                            <li>
                                <a href="index.html#" title="Instagram">
                                    <i class="fa-brands fa-instagram fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#" title="Facebook">
                                    <i class="fa-brands fa-square-facebook fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">{{ __("index.pages") }}</h6>
                        <ul class="widget_links">
                            <li>
                                <a href="{{ route('contact') }}" title="{{ __('index.contact') }}">
                                    {{ __("index.contact") }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}" title="{{ __('index.faqs') }}">
                                    {{ __("index.faqs") }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('privacy-policy') }}" title="{{ __('privacy.title') }}">
                                    {{ __("privacy.title") }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('terms') }}" title="{{ __('terms.title') }}">
                                    {{ __("terms.title") }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">
                            {{ __("index.categories") }}
                        </h6>
                        <ul class="widget_links">
                            @foreach($categories->shuffle()->slice(0, 5) as $category)
                            <li>
                                <a href="{{route('products')}}?categories%5B%5D={{ $category->id }}" title="{{ $category->{lang('name')} }}">
                                    {{ $category->{lang('name')} }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-start">
                        © {{ date('Y') }} {{ __("messages.all_rights_reserved") }} <strong class="text-lowercase">{{ config('app.name', 'Monik') }}.am</strong>
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-lg-end">
                        <li>
                            <img src="{{ asset('images/payment/arca.png') }}" alt="arca" />
                        </li>
                        <li>
                            <img src="{{ asset('images/payment/visa.png') }}" alt="visa" />
                        </li>
                        <li>
                            <img src="{{ asset('images/payment/master_card.png') }}" alt="master_card" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->