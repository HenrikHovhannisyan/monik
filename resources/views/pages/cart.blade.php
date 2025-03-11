@extends('layouts.app')

@section('title')
    @parent | {{ __("index.cart") }}
@endsection

@php
$total = $cartItems->sum(fn($item) => ($item->product->price - ($item->product->price * $item->product->discount) / 100) * $item->quantity);
@endphp

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ __("index.cart") }}</h1>
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
                        <li class="breadcrumb-item active">{{ __("index.cart") }}</li>
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
                    <div class="col-12">
                        <div class="table-responsive shop_cart_table">
                            @if($cartItems->isNotEmpty())
                                <table class="table">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">{{ __("index.name") }}</th>
                                    <th class="product-size">{{ __("index.size") }}</th>
                                    <th class="product-price">{{ __("index.price") }}</th>
                                    <th class="product-quantity">{{ __("index.quantity") }}</th>
                                    <th class="product-subtotal">{{ __("index.total") }}</th>
                                    <th class="product-remove">{{ __("index.remove") }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cartItems as $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="{{ route('product', $item->product->slug) }}">
                                                <img src="{{ asset(json_decode($item->product->images)[0]) }}" alt="{{ $item->product->{lang('name')} }}">
                                            </a>
                                        </td>
                                        <td class="product-name" data-title="{{ __("index.name") }}">
                                            <a href="{{ route('product', $item->product->slug) }}">
                                                {{ $item->product->{lang('name')} }}
                                            </a>
                                        </td>
                                        <td class="product-size" data-title="{{ __("index.size") }}">
                                            {{ $item->size }}
                                        </td>
                                        <td class="product-price" data-title="{{ __("index.price") }}">
                                            @if($item->product->discount)
                                                <del>{{ $item->product->price }}֏</del>
                                                <span class="price">
                                                    {{ $item->product->price - ($item->product->price * $item->product->discount) / 100 }}֏
                                                </span>
                                            @else
                                                {{ $item->product->price }}֏
                                            @endif
                                        </td>
                                        <td class="product-quantity" data-title="{{ __("index.quantity") }}">
                                            {{ $item->quantity }}
                                        </td>
                                        <td class="product-subtotal" data-title="{{ __("index.total") }}">
                                            @if($item->product->discount)
                                                {{ ($item->product->price - ($item->product->price * $item->product->discount) / 100) * $item->quantity }}֏
                                            @else
                                                {{ $item->product->price * $item->quantity }}֏
                                            @endif
                                        </td>
                                        <td class="product-remove" data-title="{{ __("index.remove") }}">
                                            <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                                @else
                                <div class="text-center mb-5">
                                    <h1>{{ __("index.cart_empty") }}😔</h1>
                                    <a href="{{ route('products') }}" class="btn btn-fill-out mt-3">
                                        {{ __("ad.shop_now") }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="medium_divider"></div>
                        <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                @if($cartItems->isNotEmpty())
                    <div class="row">
                    <div class="col">
                        <div class="border p-3 p-md-4">
                            <div class="heading_s1 mb-3">
                                <h6>{{ __("index.cart_totals") }}</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td class="cart_total_label">{{ __("index.cart_subtotal") }}</td>
                                        <td class="cart_total_amount">
                                            {{ $total }}֏
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">{{ __("index.shipping") }}</td>
                                        <td class="cart_total_amount">
                                            @if($total < 10000)
                                                @php $total += 500 @endphp
                                                500֏
                                            @else
                                                {{ __("index.free_ship") }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">{{ __("index.total") }}</td>
                                        <td class="cart_total_amount">
                                            <strong>
                                                {{ $total }}֏
                                            </strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ route('checkout') }}" class="btn btn-fill-out">{{ __("index.checkout") }}</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection
