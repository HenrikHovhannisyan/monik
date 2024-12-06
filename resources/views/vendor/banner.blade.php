<!-- START SECTION BANNER -->
<div class="banner_section full_screen staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow carousel_style2" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active background_bg overlay_bg_50" data-img-src="{{ asset('images/banner/1.jpg') }}">
                <div class="banner_slide_content banner_content_inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-10">
                                <div class="banner_content text_white text-center">
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">
                                        {{ __("index.banner_title_price") }}
                                    </h2>
                                    <a class="btn btn-white staggered-animation" href="{{ route('products') }}" data-animation="fadeInUp" data-animation-delay="0.5s">
                                        {{ __("ad.shop_now") }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_50" data-img-src="{{ asset('images/banner/2.jpg') }}">
                <div class="banner_slide_content banner_content_inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-10">
                                <div class="banner_content text_white text-center">
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">
                                        {{ __("index.banner_title_discount") }}
                                    </h2>
                                    <a class="btn btn-white staggered-animation" href="{{ route('products') }}" data-animation="fadeInUp" data-animation-delay="0.4s">
                                        {{ __("ad.shop_now") }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_60" data-img-src="{{ asset('images/banner/3.jpg') }}">
                <div class="banner_slide_content banner_content_inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-10">
                                <div class="banner_content text_white text-center">
                                    <h2 class="staggered-animation" data-animation="fadeInDown" data-animation-delay="0.3s">
                                        {{ __("index.banner_title_style") }}
                                    </h2>
                                    <a class="btn btn-white staggered-animation" href="{{ route('products') }}" data-animation="fadeInUp" data-animation-delay="0.4s">
                                        {{ __("ad.shop_now") }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <i class="ion-chevron-left"></i>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <i class="ion-chevron-right"></i>
        </a>
    </div>
</div>
<!-- END SECTION BANNER -->
