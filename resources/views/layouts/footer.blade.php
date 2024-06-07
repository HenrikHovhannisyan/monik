<!-- START FOOTER -->
<footer class="footer_dark">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="footer_logo">
                            <a href="index.html#"
                            ><img src="{{ asset('images/logo.png') }}" alt="logo"
                                /></a>
                        </div>
                        <p>
                            If you are going to use of Lorem Ipsum need to be sure there
                            isn't hidden of text
                        </p>
                    </div>
                    <div class="widget">
                        <ul class="social_icons social_white">
                            <li>
                                <a href="index.html#"
                                ><i class="ion-social-facebook"></i
                                    ></a>
                            </li>
                            <li>
                                <a href="index.html#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="index.html#"
                                ><i class="ion-social-googleplus"></i
                                    ></a>
                            </li>
                            <li>
                                <a href="index.html#"
                                ><i class="ion-social-youtube-outline"></i
                                    ></a>
                            </li>
                            <li>
                                <a href="index.html#"
                                ><i class="ion-social-instagram-outline"></i
                                    ></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">{{ __("index.pages") }}</h6>
                        <ul class="widget_links">
                            <li>
                                <a href="index.html#" title="{{ __("index.contact") }}">
                                    {{ __("index.contact") }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}" title="{{ __("index.faqs") }}">
                                    {{ __("index.faqs") }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">
                            {{ __("index.categories") }}
                        </h6>
                        <ul class="widget_links">
                            @foreach($categories->shuffle()->slice(0, 5) as $category)
                                <li>
                                    <a href="index.html#">
                                        {{ $category->{lang('name')} }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">My Account</h6>
                        <ul class="widget_links">
                            <li><a href="index.html#">My Account</a></li>
                            <li><a href="index.html#">Discount</a></li>
                            <li><a href="index.html#">Returns</a></li>
                            <li><a href="index.html#">Orders History</a></li>
                            <li><a href="index.html#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Contact Info</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>123 Street, Old Trafford, New South London , UK</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">info@sitename.com</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>+ 457 789 789 65</p>
                            </li>
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
                        © {{ date('Y') }} {{ __("messages.all_rights_reserved") }} {{ config('app.name', 'Sofia') }}
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-lg-end">
                        <li>
                            <a href="index.html#"
                            ><img src="{{ asset('images/payment/visa.png') }}" alt="visa"
                                /></a>
                        </li>
                        <li>
                            <a href="index.html#"
                            ><img
                                    src="{{ asset('images/payment/master_card.png') }}"
                                    alt="master_card"
                                /></a>
                        </li>
                        <li>
                            <a href="index.html#"
                            ><img
                                    src="{{ asset('images/payment/amarican_express.png') }}"
                                    alt="amarican_express"
                                /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
