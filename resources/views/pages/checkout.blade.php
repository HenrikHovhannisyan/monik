@extends('layouts.app')

@section('title')
    @parent | {{ __("index.checkout") }}
@endsection

@php
    $total = 0;

    foreach ($cartItems as $item) {
        $product = $item->product;

        // Проверяем, нужно ли применить промокод к этому товару
        if ($product->discount >= $promocodeDiscount) {
            // Если скидка продукта больше или равна скидке промокода, применяем скидку продукта
            $finalPrice = $product->price - ($product->price * $product->discount / 100);
        } else {
            // Если скидка продукта меньше скидки промокода, применяем скидку промокода
            $finalPrice = $product->price - ($product->price * $promocodeDiscount / 100);
        }

        $total += $finalPrice * $item->quantity;
    }

    $progressPercentage = min(($total / 10000) * 100, 100);
    $progressBarClass = $progressPercentage >= 100 ? "bg-success" : "bg-danger";
@endphp

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
                        @if($errors->has('promocode'))
                            <div class="alert alert-danger mt-2">{{ $errors->first('promocode') }}</div>
                        @endif
                        <div class="toggle_info">
                            <span>
                                <i class="fas fa-tag"></i>{{ __("index.have_coupon") }}
                                <a href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">
                                    {{ __("index.have_coupon_click") }}
                                </a>
                            </span>
                        </div>
                        <div class="panel-collapse collapse coupon_form" id="coupon">
                            <div class="panel-body">
                                <p>{{ __("index.apply_coupon_message") }}</p>
                                <form action="{{ route('checkout.applyPromocode') }}" method="POST">
                                    @csrf
                                    <div class="coupon field_form input-group">
                                        <input type="text" name="promocode" class="form-control"
                                               placeholder="{{ __('index.enter_coupon') }}" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-fill-out btn-sm"
                                                    type="submit">{{ __('index.apply_coupon') }}</button>
                                        </div>
                                    </div>
                                </form>
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
                                <button type="button" class="btn btn-fill-out btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#addAddressModal">
                                    {{ __("index.add_address") }}
                                </button>
                            @else
                                @foreach($user->addresses as $address)
                                    <div class="custome-radio">
                                        <input class="form-check-input" type="radio" name="shipping_address"
                                               id="{{ $address->id }}" value="{{ $address->id }}">
                                        <label class="form-check-label address_check" for="{{ $address->id }}">
                                            {{ $address->city }},
                                            {{ $address->region }},
                                            {{ $address->street }},
                                            {{ $address->house_number }},
                                            @if($address->postcode)
                                                {{ $address->postcode }}
                                            @endif
                                        </label>
                                    </div>
                                @endforeach
                            @endif
                            <div class="heading_s1 mt-3">
                                <h4>{{ __("index.additional_information") }}</h4>
                            </div>
                            <div class="form-group mb-0">
                                <textarea rows="5" class="form-control" placeholder="{{ __("index.order_notes") }}"
                                          name="order_notes"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="order_review">
                                <div class="heading_s1">
                                    <h4>{{ __("index.your_orders") }}</h4>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span>{{ $total }}֏</span>
                                    <div class="progress w-100 ms-2 me-2">
                                        <div
                                            class="progress-bar progress-bar-striped {{ $progressBarClass }} progress-bar-animated"
                                            role="progressbar"
                                            aria-valuenow="{{ $progressPercentage }}"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                            style="width: {{ $progressPercentage }}%;">
                                            {{ $progressPercentage }}%
                                        </div>
                                    </div>
                                    <span>10000֏</span>
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
                                            <td class="product-subtotal" id="product-subtotal">
                                                {{ $cartItems->sum(fn($item) => ($item->product->price - ($item->product->price * $item->product->discount) / 100) * $item->quantity) }}
                                                ֏
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>{{ __("index.shipping") }}</th>
                                            <td>
                                                <span id="shippingCost" data-free-ship="{{ __('index.free_ship') }}" >
                                                    <div class="custome-radio">
                                                        @if($total < 10000)
                                                            @php $total += 500 @endphp
                                                            <input class="form-check-input" required type="radio" name="shipping_option" id="standard" value="standard" checked>
                                                            <label class="form-check-label text-dark" for="standard">
                                                                <strong>{{ __('index.standard') }} 500֏</strong>
                                                                <br>
                                                                <small>{{ __('index.standard_conditions') }}</small>
                                                            </label>
                                                            <hr class="mt-1 mb-1">
                                                        @else
                                                            <input class="form-check-input" required type="radio" name="shipping_option" id="free" value="free" checked>
                                                            <label class="form-check-label text-dark" for="free">
                                                                <strong>{{ __("index.free_ship") }}</strong>
                                                                <br>
                                                                <small>{{ __('index.standard_conditions') }}</small>
                                                            </label>
                                                            <hr class="mt-1 mb-1">
                                                        @endif
                                                    </div>
                                                    <div class="custome-radio">
                                                        <input class="form-check-input" required type="radio" name="shipping_option" id="express" value="express">
                                                        <label class="form-check-label text-dark" for="express">
                                                            <strong>{{ __("index.express") }} 1000֏</strong>
                                                            <br>
                                                            <small>{{ __('index.express_conditions') }}</small>
                                                        </label>
                                                    </div>
                                                </span>
                                            </td>
                                        </tr>

                                        @if($promocodeDiscount > 0)
                                            <tr>
                                                <th>{{ __("index.promocode") }}</th>
                                                <td>-{{ $promocodeDiscount }}%</td>
                                            </tr>
                                        @endif

                                        <tr>
                                            <th>{{ __("index.total") }}</th>
                                            <td class="product-subtotal">
                                                <span id="shippingTotal">{{ $total }}</span>֏

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
                                            <input class="form-check-input" required type="radio" name="payment_option"
                                                   id="cash" value="cash" checked>
                                            <label class="form-check-label" for="cash">{{ __("index.cash") }}</label>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-fill-out btn-block" id="checkout"
                                        disabled>{{ __("index.checkout") }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection
