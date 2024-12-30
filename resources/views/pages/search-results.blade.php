@extends('layouts.app')

@section('title')
    @parent | {{ __("index.search_results") }}
@endsection

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ __("index.search_results") }}</h1>
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
                            {{ __("index.search_results") }}
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
                    <div class="col">
                        <div class="row align-items-center mb-4 pb-1">
                            <div class="col-12">
                                <div class="product_header">
                                    <div class="product_header_right">
                                        <div class="products_view">
                                            <a href="javascript:;" class="shorting_icon grid active">
                                                <i class="ti-view-grid"></i>
                                            </a>
                                            <a href="javascript:;" class="shorting_icon list">
                                                <i class="ti-layout-list-thumb"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row shop_container">
                            @if($products->isEmpty())
                                <div class="col-md-12">
                                    <div class="alert alert-danger text-center" role="alert">
                                        <h3>{{ __("index.no_products_available") }} 😔</h3>
                                        <br>
                                        <a href="{{ route('products') }}" class="btn-sm btn-fill-out">
                                            {{ __("index.clear_filter") }}
                                        </a>
                                    </div>
                                </div>
                            @else
                                @foreach($products as $product)
                                    <div class="col-md-3 col-6">
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
                                                        {{ __('index.sale') }} {{ $product->discount }}%
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="product_img">
                                                <a href="{{ route('product', ['slug' => $product->slug]) }}">
                                                    <img src="{{ asset(json_decode($product->images)[0]) }}" alt="{{ $product->{lang('name')} }}"/>
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
                                                <div class="pr_desc">
                                                    <p>
                                                        {!! html_entity_decode( $product->{lang('description')}) !!}
                                                    </p>
                                                </div>
                                                <div class="list_product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li>
                                                            <a href="{{ route('shop.quick.view', ['id' => $product->id]) }}" class="popup-ajax btn btn-fill-out">
                                                                <i class="fa-solid fa-magnifying-glass-plus m-0"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        {{ $products->links('vendor.pagination.default') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection
