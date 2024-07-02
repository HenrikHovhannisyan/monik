@extends('layouts.app')

@section('title')
    @parent | {{ __("index.product") }} {{ $product->{lang('name')} }}
@endsection

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ __("index.product") }} {{ $product->{lang('name')} }}</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item">
                            <a href="{{ route("home") }}">
                                {{ __("index.home") }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route("products") }}">
                                {{ __("index.products") }}
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ __("index.product") }} {{ $product->{lang('name')} }}
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
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                        <div class="product-image">
                            <div class="product_img_box">
                                <img id="product_img" src='{{ asset(json_decode($product->images)[0]) }}'
                                     data-zoom-image="{{ asset(json_decode($product->images)[0]) }}"
                                     alt="{{ $product->{lang('name')} }}"/>
                            </div>
                            <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4"
                                 data-slides-to-scroll="1" data-infinite="false">
                                @foreach(json_decode($product->images) as $index => $imagePath)
                                    <div class="item">
                                        <a href="#" class="product_gallery_item {{ $index == 0 ? 'active' : '' }}"
                                           data-image="{{asset($imagePath)}}" data-zoom-image="{{asset($imagePath)}}">
                                            <img src="{{asset($imagePath)}}" alt="{{ $product->{lang('name')} }}"/>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="product_description">
                                <h4 class="product_title">
                                    <a href="{{ route('product', ['id' => $product->id]) }}"
                                       title="{{ $product->{lang('name')} }}">
                                        {{ $product->{lang('name')} }}
                                    </a>
                                </h4>
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
                                        {!! html_entity_decode( $product->{lang('description')})  !!}
                                    </p>
                                </div>
                                <div class="product_sort_info">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-rotate"></i>
                                            {{ __('index.14_day_return') }}
                                        </li>
                                    </ul>
                                </div>
                                @if($product->color)
                                    <div class="pr_switch_wrap">
                                        <span class="switch_lable">
                                            {{ __("index.color") }}
                                        </span>
                                        <div class="product_color_switch">
                                            <span data-color="{{ $product->color }}"></span>
                                        </div>
                                    </div>
                                @endif
                                <div class="pr_switch_wrap">
                                    <span class="switch_lable">
                                        {{ __("index.gender") }}
                                    </span>
                                    <div class="product_color_switch">
                                        @foreach($gender as $key => $value)
                                            {{ __("index.$value") }}
                                            @if(!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="pr_switch_wrap d-flex align-items-center">
                                    <span class="switch_lable">
                                        {{ __("index.size") }}
                                    </span>
                                    <div class="product_size_switch">
                                        @foreach($size as $sizeName => $item)
                                            @if( $item['quantity'])
                                                <span data-max="{{ $item['quantity'] }}">{{ $sizeName }}</span>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="cart_extra">
                                <div class="cart-product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </div>
                                <div class="cart_btn">
                                    <button class="btn btn-fill-out btn-addtocart" type="button" disabled>
                                        <i class="fa-solid fa-cart-plus"></i>
                                        {{ __("index.add_to_cart") }}
                                    </button>
                                    <a class="add_wishlist" href="shop-quick-view.html#">
                                        <i class="fa-regular fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <hr/>
                            <ul class="product-meta">
                                <li>
                                    SKU:
                                    <a href="#" title="{{ $product->code }}">
                                        {{ $product->code }}
                                    </a>
                                    <button class="btn btn-outline-secondary ps-2 pe-1 p-0"
                                            onclick="copyProductCode('{{ $product->code }}')">
                                        <i class="fa-solid fa-copy copy-icon"></i>
                                    </button>
                                </li>
                                <li>{{ __("index.category") }}:
                                    <a href="#" title="{{ $product->category->{lang('name')} }}">
                                        {{ $product->category->{lang('name')} }}
                                    </a>
                                </li>
                            </ul>

                            <div class="product_share">
                                <span>{{ __("index.share") }}:</span>
                                <ul class="social_icons">
                                    <li><a href="shop-quick-view.html#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="shop-quick-view.html#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="shop-quick-view.html#"><i class="ion-social-instagram-outline"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="large_divider clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        id="Description-tab"
                                        data-bs-toggle="tab"
                                        href="shop-product-detail.html#Description"
                                        role="tab"
                                        aria-controls="Description"
                                        aria-selected="true"
                                    >
                                        {{ __("index.description") }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        id="Additional-info-tab"
                                        data-bs-toggle="tab"
                                        href="shop-product-detail.html#Additional-info"
                                        role="tab"
                                        aria-controls="Additional-info"
                                        aria-selected="false"
                                    >
                                        {{ __("index.additional_info") }}
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab">
                                <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                    {!! html_entity_decode( $product->{lang('description')})  !!}
                                </div>
                                <div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>SKU</td>
                                            <td>
                                                {{ $product->code }}
                                                <button class="btn btn-outline-secondary ps-2 pe-1 p-0" onclick="copyProductCode('{{ $product->code }}')">
                                                    <i class="fa-solid fa-copy copy-icon"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ __("index.category") }}</td>
                                            <td>{{ $product->category->{lang('name')} }}</td>
                                        </tr>
                                        @if($product->color)
                                            <tr>
                                                <td>{{ __("index.color") }}</td>
                                                <td>
                                                    <div class="product_color_switch">
                                                        <span data-color="{{ $product->color }}"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td>{{ __("index.gender") }}</td>
                                            <td>
                                                @foreach($gender as $key => $value)
                                                    {{ __("index.$value") }}
                                                    @if(!$loop->last)
                                                        ,
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ __("index.size") }}</td>
                                            <td>
                                                @foreach($size as $sizeName => $item)
                                                    @if($item['quantity'])
                                                        <span class="border ps-1 pe-1 me-1">
                                                            {{ $sizeName }}
                                                        </span>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="small_divider"></div>
                        <div class="divider"></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="heading_s1">
                            <h3>
                                {{ __("index.similar_products") }}
                            </h3>
                        </div>
                        <div
                            class="releted_product_slider carousel_slider owl-carousel owl-theme"
                            data-margin="20"
                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'
                        >
                            @foreach($randomProducts as $product)
                                <div class="item">
                                    <div class="product">
                                        <div class="product_flashes">
                                            @php
                                                $statusArray = json_decode($product->status, true) ?? [];
                                            @endphp
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
                                            @if(in_array('new', $statusArray))
                                                <span class="pr_flash">
                                                    {{ __('index.new') }}
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
                                                        <a href="{{ route('product', ['id' => $product->id]) }}">
                                                            <i class="fa-regular fa-eye"></i>
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
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    <!-- END MAIN CONTENT -->
@endsection