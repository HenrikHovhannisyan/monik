@extends('layouts.app')

@section('title')
    @parent | {{ __("index.checkout") }}
@endsection

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ __("index.checkout") }}</h1>
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
                            <a href="{{ route("cart.index") }}">
                                {{ __("index.cart") }}
                            </a>
                        </li>
                        <li class="breadcrumb-item active">{{ __("index.checkout") }}</li>
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
                        <div class="toggle_info">
                            <span>
                                <i class="fas fa-tag"></i>{{ __("index.have_coupon") }}
                                <a href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    {{ __("index.enter_coupon") }}
                                </a>
                            </span>
                        </div>
                        <div class="panel-collapse collapse coupon_form" id="coupon">
                            <div class="panel-body">
                                <p>{{ __("index.apply_coupon_message") }}</p>
                                <div class="coupon field_form input-group">
                                    <input type="text" value="" class="form-control"
                                           placeholder="{{ __("index.enter_coupon") }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-fill-out btn-sm"
                                                type="submit">{{ __("index.apply_coupon") }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="medium_divider"></div>
                        <div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <form method="POST" action="{{ route('checkouts.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading_s1">
                                <h4>
                                    {{ __("index.address") }}
                                    <span class="text-danger">*</span>
                                </h4>
                            </div>
                            @if($user->addresses->isEmpty())
                                <p class="mb-1">{{ __("index.no_address_message") }}</p>
                                <button type="button" class="btn btn-fill-out btn-sm" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                    {{ __("index.add_address") }}
                                </button>
                            @else
                                @foreach($user->addresses as $address)
                                    <div class="custome-radio">
                                        <input class="form-check-input" type="radio" name="shipping_address" id="{{ $address->id }}" value="{{ $address->id }}">
                                        <label class="form-check-label address_check" for="{{ $address->id }}">
                                            {{ $address->city }},
                                            {{ $address->state }},
                                            {{ $address->address }},
                                            @if($address->address2)
                                                {{ $address->address2 }},
                                            @endif
                                            {{ $address->postcode }}
                                        </label>
                                    </div>
                                @endforeach
                            @endif
                            <div class="heading_s1 mt-3">
                                <h4>{{ __("index.additional_information") }}</h4>
                            </div>
                            <div class="form-group mb-0">
                                <textarea rows="5" class="form-control" placeholder="{{ __("index.order_notes") }}" name="order_notes"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="order_review">
                                <div class="heading_s1">
                                    <h4>{{ __("index.your_orders") }}</h4>
                                </div>
                                <div class="table-responsive order_table">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>{{ __("index.product") }}</th>
                                            <th>{{ __("index.total") }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cartItems as $item)
                                            <tr>
                                                <td>{{ $item->product->{lang('name')} }}
                                                    <span class="product-qty">x {{ $item->quantity }}</span>
                                                </td>
                                                <td>
                                                    @if($item->product->discount)
                                                        <del>{{ $item->product->price }}֏</del>
                                                        <span class="price">
                                            {{ $item->product->price - ($item->product->price * $item->product->discount) / 100 }}֏
                                        </span>
                                                    @else
                                                        {{ $item->product->price }}֏
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>{{ __("index.cart_subtotal") }}</th>
                                            <td class="product-subtotal">
                                                {{ $cartItems->sum(fn($item) => ($item->product->price - ($item->product->price * $item->product->discount) / 100) * $item->quantity) }}֏
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>{{ __("index.shipping") }}</th>
                                            <td>{{ __("index.free_ship") }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __("index.total") }}</th>
                                            <td class="product-subtotal">
                                                {{ $cartItems->sum(fn($item) => ($item->product->price - ($item->product->price * $item->product->discount) / 100) * $item->quantity) }}֏
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="payment_method">
                                    <div class="heading_s1">
                                        <h4>
                                            {{ __("index.payment") }}
                                            <span class="text-danger">*</span>
                                        </h4>
                                    </div>
                                    <div class="payment_option">
                                        <div class="custome-radio">
                                            <input class="form-check-input" required type="radio" name="payment_option" id="cash" value="cash" checked>
                                            <label class="form-check-label" for="cash">{{ __("index.cash") }}</label>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-fill-out btn-block" id="checkout" disabled>{{ __("index.checkout") }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection
