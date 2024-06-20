@extends('layouts.app')

@section('title')
    @parent | {{ __("index.products") }}
@endsection

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ __("index.products") }}</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item">
                            <a href="{{ route("home") }}">
                                {{ __("index.home") }}
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ __("index.products") }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row align-items-center mb-4 pb-1">
                            <div class="col-12">
                                <div class="product_header">
                                    <div class="product_header_left">
                                        <div class="custom_select">
                                            <select class="form-control form-control-sm">
                                                <option value="order">Default sorting</option>
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="date">Sort by newness</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="product_header_right">
                                        <div class="products_view">
                                            <a href="javascript:;" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                            <a href="javascript:;" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row shop_container">
                            @foreach($products as $product)
                                <div class="col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_flashes">
                                            @php
                                                $statusArray = json_decode($product->status, true) ?? [];
                                            @endphp
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
                                            @if($product->discount)
                                                <span class="pr_flash bg-success">
                                                    {{ __('index.sale') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="product_img">
                                            <a href="{{ route('product', ['id' => $product->id]) }}">
                                                <img src="{{ asset(json_decode($product->images)[0]) }}" alt="{{ $product->{lang('name')} }}"/>
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart">
                                                        <a href="index.html#">
                                                            <i class="fa-solid fa-cart-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('shop.quick.view', ['id' => $product->id]) }}" class="popup-ajax">
                                                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html#">
                                                            <i class="fa-solid fa-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <b>
                                                    <a href="{{ route('product', ['id' => $product->id]) }}">
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
                                                    <div class="on_sale">
                                                        <span>{{ $product->discount }}%</span>
                                                    </div>
                                                @else
                                                    <span class="price">
                                                        {{ $product->price }}֏
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="pr_desc">
                                                <p>
                                                    {!! html_entity_decode( $product->{lang('description')}) !!}
                                                </p>
                                            </div>
                                            <div class="list_product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart">
                                                        <a href="index.html#">
                                                            <i class="fa-solid fa-cart-plus"></i>
                                                            {{ __("index.add_to_cart") }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('shop.quick.view', ['id' => $product->id]) }}" class="popup-ajax">
                                                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html#">
                                                            <i class="fa-solid fa-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{ $products->links('vendor.pagination.default') }}
                    </div>
                    <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                        <div class="sidebar">
                            <div class="widget">
                                <h5 class="widget_title">
                                    {{ __("index.categories") }}
                                </h5>
                                <ul class="widget_categories">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="shop-left-sidebar.html#">
                                                <span class="categories_name">{{ $category->{lang('name')} }}</span>
                                                <span class="categories_num">({{ count($category->products) }})</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget">
                                <h5 class="widget_title">
                                    {{ __("index.filter") }}
                                </h5>
                                <div class="filter_price">
                                    <div id="price_filter" data-min="0" data-max="500" data-min-value="50" data-max-value="300" data-price-sign="֏"></div>
                                    <div class="price_range">
                                        <span>{{ __("index.price") }}: <span id="flt_price"></span></span>
                                        <input type="hidden" id="price_first">
                                        <input type="hidden" id="price_second">
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget_title">
                                    {{ __("index.gender") }}
                                </h5>
                                <ul class="list_brand">
                                    <li>
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="gender" id="boy" value="boy">
                                            <label class="form-check-label" for="boy">
                                                <span>{{ __("index.boy") }}</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="gender" id="girl" value="girl">
                                            <label class="form-check-label" for="girl">
                                                <span>{{ __("index.girl") }}</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h5 class="widget_title">
                                    {{ __("index.status") }}
                                </h5>
                                <ul class="list_brand">
                                    <li>
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="status" id="new" value="new">
                                            <label class="form-check-label" for="new">
                                                <span>{{ __("index.new") }}</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="status" id="top" value="top">
                                            <label class="form-check-label" for="top">
                                                <span>{{ __("index.top") }}</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="status" id="sale" value="sale">
                                            <label class="form-check-label" for="sale">
                                                <span><span>{{ __("index.sale") }}</span></span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h5 class="widget_title">
                                    {{ __("index.size") }}
                                </h5>
                                <div class="product_size_switch">
                                    <span>0-3</span>
                                    <span>3-6</span>
                                    <span>6-12</span>
                                    <span>12-18</span>
                                    <span>18-24</span>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="shop_banner">
                                    <div class="banner_img overlay_bg_20">
                                        <img src="{{ "images/ad/sidebar_banner_img.png" }}" alt="{{ config('app.name', 'Sofia') }}">
                                    </div>
                                    <div class="shop_bn_content2 text_white">
                                        <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                        <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                        <a href="shop-left-sidebar.html#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection
