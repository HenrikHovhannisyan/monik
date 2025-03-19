@extends('layouts.app')

@section('title')
    @parent | {{ __('index.order_details') }}
@endsection

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ __('index.order_details') }}</h1>
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
                            <a href="{{ route('account') }}">
                                {{ __('index.my_account') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ __('index.order_details') }}
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
                    <div class="col-md-4 order_summary">
                        <h3>{{ __('index.order_details') }}</h3>
                        <p>
                            <strong>{{ __('index.order_number') }}:</strong>
                            {{ $order->id }}
                        </p>
                        <p>
                            <strong>{{ __('index.order_date') }}:</strong>
                            {{ $order->created_at->format('Y-m-d') }}
                        </p>
                        <p>
                            <strong>{{ __('index.cart') }}:</strong>
                            {{ $order->cart_price }}֏
                        </p>
                        <p>
                            <strong>{{ __('index.shipping') }}:</strong>
                            {{ floor($order->shipping_cost) }}֏ ({{ __('index.' . $order->shipping_option) }})
                        </p>
                        <p>
                            <strong>{{ __('index.total') }}:</strong>
                            {{ $order->total_price }}֏
                        </p>
                        <p class="text-capitalize">
                            <strong>{{ __('index.status') }}:</strong>
                            @if($order->status === 'processing')
                                <span class="text-primary">{{ __("index." . $order->status) }}</span>
                            @elseif($order->status === 'pending')
                                <span class="text-warning">{{ __("index." . $order->status) }}</span>
                            @elseif($order->status === 'completed')
                                <span class="text-success">{{ __("index." . $order->status) }}</span>
                            @else
                                <span class="text-danger">{{ __("index." . $order->status) }}</span>
                            @endif
                        </p>
                    </div>
                    <div class="col-md-4 order_shipping">
                        <h3>{{ __('index.shipping_details') }}</h3>

                        @if($order->shippingAddress)
                            @if($order->shippingAddress->city)
                                <p class="text-capitalize">
                                    <strong>{{ __('index.city') }}:</strong>
                                    {{ __('index.cities.' . $order->shippingAddress->city) }}
                                </p>
                            @endif
                            @if($order->shippingAddress->region)
                                <p class="text-capitalize">
                                    <strong>{{ __('index.region') }}:</strong>
                                    {{ $order->shippingAddress->region }}
                                </p>
                            @endif
                            @if($order->shippingAddress->street)
                                <p class="text-capitalize">
                                    <strong>{{ __('index.street') }}:</strong>
                                    {{ $order->shippingAddress->street }}
                                </p>
                            @endif
                            @if($order->shippingAddress->house_number)
                                <p class="text-capitalize">
                                    <strong>{{ __('index.house_number') }}:</strong>
                                    {{ $order->shippingAddress->house_number }}
                                </p>
                            @endif
                            @if($order->shippingAddress->postcode)
                                <p class="text-capitalize">
                                    <strong>{{ __('index.postcode') }}:</strong>
                                    {{ $order->shippingAddress->postcode }}
                                </p>
                            @endif
                        @else
                            <p>{{ __('index.no_shipping_address') }}</p>
                        @endif
                    </div>
                    <div class="col-md-4 order_payment">
                        <h3>{{ __('index.payment_details') }}</h3>
                        <p class="text-capitalize">
                            <strong>{{ __('index.payment_method') }}:</strong>
                            {{ __("index." . $order->payment_option) }}
                        </p>
                    </div>

                    <div class="col-12 order_items">
                        <h3>{{ __('index.products') }}</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>{{ __('index.product') }}</th>
                                    <th>{{ __('index.size') }}</th>
                                    <th>{{ __('index.quantity') }}</th>
                                    <th>{{ __('index.price') }}</th>
                                    <th>{{ __('index.total') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->orderItems as $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="{{ route('product', $item->product->slug) }}">
                                                <img src="{{ asset(json_decode($item->product->images)[0]) }}" alt="{{ $item->product->{lang('name')} }}">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('product', $item->product->slug) }}">
                                                {{ $item->product->{lang('name')} }}
                                            </a>
                                        </td>
                                        <td> {{ $item->size }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>
                                            {{ floor($item->price) }}֏
                                        </td>
                                        <td>{{ $item->quantity * $item->price }}֏</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection
