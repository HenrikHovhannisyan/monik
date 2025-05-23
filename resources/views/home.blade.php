@extends('layouts.app')

@section('content')
@include('vendor.banner')

<!-- END MAIN CONTENT -->
<div class="main_content">
    <!-- START SECTION CATEGORIES -->
    <div class="section pt-0 small_pb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cat_overlap radius_all_5">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-4">
                                <div class="text-center text-md-start">
                                    <h4>{{ __("index.categories") }}</h4>
                                    <a href="{{ route('products') }}" class="btn btn-line-fill btn-sm">
                                        {{ __("index.view_all") }}
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <div
                                    class="cat_slider mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5"
                                    data-loop="true"
                                    data-dots="false"
                                    data-nav="true"
                                    data-margin="30"
                                    data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "4"}}'>
                                    @foreach($categories as $category)
                                    <div class="item">
                                        <div class="categories_box">
                                            <a href="{{route('products')}}?categories%5B%5D={{ $category->id }}">
                                                <img
                                                    src="{{ asset( $category->image ) }}"
                                                    alt="{{ $category->{lang('name')} }}" />
                                                <span>{{ $category->{lang('name')} }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION CATEGORIES -->

    <!-- START SECTION SHOP -->
    <div class="section small_pt pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>{{ __('index.exclusive_products') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-style1">
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    id="all-tab"
                                    data-bs-toggle="tab"
                                    href="#all"
                                    role="tab"
                                    aria-controls="all"
                                    aria-selected="true">
                                    {{ __('index.all') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="new-tab"
                                    data-bs-toggle="tab"
                                    href="#new"
                                    role="tab"
                                    aria-controls="new"
                                    aria-selected="true">
                                    {{ __('index.new') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="top-tab"
                                    data-bs-toggle="tab"
                                    href="#top"
                                    role="tab"
                                    aria-controls="top"
                                    aria-selected="false">
                                    {{ __('index.top') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="sale-tab"
                                    data-bs-toggle="tab"
                                    href="#sale"
                                    role="tab"
                                    aria-controls="sale"
                                    aria-selected="false">
                                    {{ __('index.sale') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="row shop_container">
                                @foreach($allProducts as $product)
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_flashes">
                                            @php
                                            $statusArray = json_decode($product->status, true) ?? [];
                                            @endphp
                                            @if($product->discount)
                                            <span class="pr_flash bg-success">
                                                {{ __('index.sale') }} {{ $product->discount }}%
                                            </span>
                                            @endif
                                            @if(in_array('new', $statusArray))
                                            <span class="pr_flash">
                                                {{ __('index.new') }}
                                            </span>
                                            @endif
                                            @if(in_array('top', $statusArray))
                                            <span class="pr_flash bg-danger">
                                                {{ __('index.top') }}
                                            </span>
                                            @endif
                                        </div>
                                        <div class="product_img">
                                            <a href="{{ route('product', ['slug' => $product->slug]) }}">
                                                <img src="{{ asset(json_decode($product->images)[0]) }}" alt="{{ $product->{lang('name')} }}" />
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li>
                                                        <a href="{{ route('shop.quick.view', ['id' => $product->id]) }}" class="popup-ajax">
                                                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <b>
                                                    <a href="{{ route('product', ['slug' => $product->slug]) }}">
                                                        {{ $product->{lang('name')} }}
                                                    </a>
                                                </b>
                                            </h6>
                                            <div class="product_price">
                                                @if($product->discount)
                                                <span class="price">
                                                    {{ $product->price - ($product->price * $product->discount) / 100 }}֏
                                                </span>
                                                <del>{{ $product->price }}֏</del>
                                                @else
                                                <span class="price">
                                                    {{ $product->price }}֏
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="new" role="tabpanel" aria-labelledby="new-tab">
                            <div class="row shop_container">
                                @foreach($newProducts as $product)
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_flashes">
                                            @php
                                            $statusArray = json_decode($product->status, true) ?? [];
                                            @endphp
                                            @if($product->discount)
                                            <span class="pr_flash bg-success">
                                                {{ __('index.sale') }} {{ $product->discount }}%
                                            </span>
                                            @endif
                                            @if(in_array('new', $statusArray))
                                            <span class="pr_flash">
                                                {{ __('index.new') }}
                                            </span>
                                            @endif
                                            @if(in_array('top', $statusArray))
                                            <span class="pr_flash bg-danger">
                                                {{ __('index.top') }}
                                            </span>
                                            @endif
                                        </div>
                                        <div class="product_img">
                                            <a href="{{ route('product', ['slug' => $product->slug]) }}">
                                                <img src="{{ asset(json_decode($product->images)[0]) }}" alt="{{ $product->{lang('name')} }}" />
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li>
                                                        <a href="{{ route('shop.quick.view', ['id' => $product->id]) }}" class="popup-ajax">
                                                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <b>
                                                    <a href="{{ route('product', ['slug' => $product->slug]) }}">
                                                        {{ $product->{lang('name')} }}
                                                    </a>
                                                </b>
                                            </h6>
                                            <div class="product_price">
                                                @if($product->discount)
                                                <span class="price">
                                                    {{ $product->price - ($product->price * $product->discount) / 100 }}֏
                                                </span>
                                                <del>{{ $product->price }}֏</del>
                                                @else
                                                <span class="price">
                                                    {{ $product->price }}֏
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top" role="tabpanel" aria-labelledby="top-tab">
                            <div class="row shop_container">
                                @foreach($topProducts as $product)
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_flashes">
                                            @php
                                            $statusArray = json_decode($product->status, true) ?? [];
                                            @endphp
                                            @if($product->discount)
                                            <span class="pr_flash bg-success">
                                                {{ __('index.sale') }} {{ $product->discount }}%
                                            </span>
                                            @endif
                                            @if(in_array('new', $statusArray))
                                            <span class="pr_flash">
                                                {{ __('index.new') }}
                                            </span>
                                            @endif
                                            @if(in_array('top', $statusArray))
                                            <span class="pr_flash bg-danger">
                                                {{ __('index.top') }}
                                            </span>
                                            @endif
                                        </div>
                                        <div class="product_img">
                                            <a href="{{ route('product', ['slug' => $product->slug]) }}">
                                                <img src="{{ asset(json_decode($product->images)[0]) }}" alt="{{ $product->{lang('name')} }}" />
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li>
                                                        <a href="{{ route('shop.quick.view', ['id' => $product->id]) }}" class="popup-ajax">
                                                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <b>
                                                    <a href="{{ route('product', ['slug' => $product->slug]) }}">
                                                        {{ $product->{lang('name')} }}
                                                    </a>
                                                </b>
                                            </h6>
                                            <div class="product_price">
                                                @if($product->discount)
                                                <span class="price">
                                                    {{ $product->price - ($product->price * $product->discount) / 100 }}֏
                                                </span>
                                                <del>{{ $product->price }}֏</del>
                                                @else
                                                <span class="price">
                                                    {{ $product->price }}֏
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sale" role="tabpanel" aria-labelledby="sale-tab">
                            <div class="row shop_container">
                                @foreach($saleProducts as $product)
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_flashes">
                                            @php
                                            $statusArray = json_decode($product->status, true) ?? [];
                                            @endphp
                                            @if($product->discount)
                                            <span class="pr_flash bg-success">
                                                {{ __('index.sale') }} {{ $product->discount }}%
                                            </span>
                                            @endif
                                            @if(in_array('new', $statusArray))
                                            <span class="pr_flash">
                                                {{ __('index.new') }}
                                            </span>
                                            @endif
                                            @if(in_array('top', $statusArray))
                                            <span class="pr_flash bg-danger">
                                                {{ __('index.top') }}
                                            </span>
                                            @endif
                                        </div>
                                        <div class="product_img">
                                            <a href="{{ route('product', ['slug' => $product->slug]) }}">
                                                <img src="{{ asset(json_decode($product->images)[0]) }}" alt="{{ $product->{lang('name')} }}" />
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li>
                                                        <a href="{{ route('shop.quick.view', ['id' => $product->id]) }}" class="popup-ajax">
                                                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <b>
                                                    <a href="{{ route('product', ['slug' => $product->slug]) }}">
                                                        {{ $product->{lang('name')} }}
                                                    </a>
                                                </b>
                                            </h6>
                                            <div class="product_price">
                                                @if($product->discount)
                                                <span class="price">
                                                    {{ $product->price - ($product->price * $product->discount) / 100 }}֏
                                                </span>
                                                <del>{{ $product->price }}֏</del>
                                                @else
                                                <span class="price">
                                                    {{ $product->price }}֏
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

    @include('vendor.ad')

    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>{{ __('index.featured_products') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div
                        class="product_slider carousel_slider owl-carousel owl-theme nav_style1"
                        data-loop="true"
                        data-dots="false"
                        data-nav="true"
                        data-margin="20"
                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                        @foreach($sliderProducts as $product)
                        <div class="item">
                            <div class="product">
                                <div class="product_flashes">
                                    @php
                                    $statusArray = json_decode($product->status, true) ?? [];
                                    @endphp
                                    @if($product->discount)
                                    <span class="pr_flash bg-success">
                                        {{ __('index.sale') }} {{ $product->discount }}%
                                    </span>
                                    @endif
                                    @if(in_array('new', $statusArray))
                                    <span class="pr_flash">
                                        {{ __('index.new') }}
                                    </span>
                                    @endif
                                    @if(in_array('top', $statusArray))
                                    <span class="pr_flash bg-danger">
                                        {{ __('index.top') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="product_img">
                                    <a href="{{ route('product', ['slug' => $product->slug]) }}">
                                        <img src="{{ asset(json_decode($product->images)[0]) }}" alt="{{ $product->{lang('name')} }}" />
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li>
                                                <a href="{{ route('shop.quick.view', ['id' => $product->id]) }}" class="popup-ajax">
                                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title">
                                        <b>
                                            <a href="{{ route('product', ['slug' => $product->slug]) }}">
                                                {{ $product->{lang('name')} }}
                                            </a>
                                        </b>
                                    </h6>
                                    <div class="product_price">
                                        @if($product->discount)
                                        <span class="price">
                                            {{ $product->price - ($product->price * $product->discount) / 100 }}֏
                                        </span>
                                        <del>{{ $product->price }}֏</del>
                                        @else
                                        <span class="price">
                                            {{ $product->price }}֏
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

    <!-- START SECTION SHOP INFO -->
    <div class="section pb_70">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="icon_box icon_box_style1">
                        <div class="icon">
                            <img src="{{ asset('images/icons/delivery.png') }}" alt="{{ __('index.free_delivery') }}" />
                        </div>
                        <div class="icon_box_content">
                            <h5>{{ __('index.free_delivery') }}</h5>
                            <p>
                                {{ __('index.free_shipping') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon_box icon_box_style1">
                        <div class="icon">
                            <img src="{{ asset('images/icons/high_quality.png') }}" alt="{{ __('index.high_quality_title') }}" />
                        </div>
                        <div class="icon_box_content">
                            <h5>{{ __('index.high_quality_title') }}</h5>
                            <p>
                                {{ __('index.high_quality_description') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon_box icon_box_style1">
                        <div class="icon">
                            <img src="{{ asset('images/icons/support.png') }}" alt="{{ __('index.support') }}" />
                        </div>
                        <div class="icon_box_content">
                            <h5>{{ __('index.support') }}</h5>
                            <p>
                                {{ __('index.ready_to_help') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP INFO -->
</div>
<!-- END MAIN CONTENT -->

@endsection