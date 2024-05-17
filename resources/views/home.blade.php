@extends('layouts.app')

@section('content')

    <section id="banner">
        <div class="banner">
            <div class="banner-content">
                <h1>Welcome</h1>
                <p>sofia.am</p>
            </div>
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
