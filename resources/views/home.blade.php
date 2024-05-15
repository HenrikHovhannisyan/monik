@extends('layouts.app')

@section('content')

    <section id="banner">
        <div class="swiper banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img
                        src="https://static.vecteezy.com/system/resources/previews/041/930/836/non_2x/baby-items-horizontal-web-banner-kid-toys-booties-diapers-ball-pacifier-bodysuit-pyramid-and-other-newborn-elements-illustration-for-header-website-cover-templates-in-modern-design-vector.jpg"
                        alt="">
                </div>
                <div class="swiper-slide">
                    <img
                        src="https://static.vecteezy.com/system/resources/previews/041/930/836/non_2x/baby-items-horizontal-web-banner-kid-toys-booties-diapers-ball-pacifier-bodysuit-pyramid-and-other-newborn-elements-illustration-for-header-website-cover-templates-in-modern-design-vector.jpg"
                        alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section id="categories">
        <h2 class="title">{{ __('index.categories') }}</h2>
        <div class="container">
            <div class="row">
                <div class="swiper category">
                    <div class="swiper-wrapper">
                        @foreach($categories as $category)
                            <div class="swiper-slide">
                                <div class="item">
                                    <img src="{{ asset( $category->image ) }}" width="100" alt="">
                                    <p class="">{{ $category->{lang('name')} }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
