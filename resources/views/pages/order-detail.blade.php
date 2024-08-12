@extends('layouts.app')

@section('title')
    @parent | {{ __('Order Details') }}
@endsection

@section('content')
    <!-- START SECTION ORDER DETAIL -->
    <div class="order_detail_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{ __('Order Details') }}</h1>
                    <div class="order_summary">
                        <h2>{{ __('Order Number') }}: {{ $order->id }}</h2>
                        <p><strong>{{ __('Order Date') }}:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
                        <p><strong>{{ __('Total Price') }}:</strong> {{ $order->total_price }}֏</p>
                        <p><strong>{{ __('Status') }}:</strong> {{ $order->status }}</p>
                    </div>

                    <div class="order_items">
                        <h3>{{ __('Items') }}</h3>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>{{ __('Product') }}</th>
                                <th>{{ __('Quantity') }}</th>
                                <th>{{ __('Price') }}</th>
                                <th>{{ __('Total') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->orderItems as $item)
                                <tr>
                                    <td>{{ $item->product->{lang('name')} }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->price }}֏</td>
                                    <td>{{ $item->quantity * $item->price }}֏</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="order_shipping">
                        <h3>{{ __('Shipping Details') }}</h3>
                        <p><strong>{{ __('Address') }}:</strong> {{ $order->shipping_address }}</p>
                        <p><strong>{{ __('City') }}:</strong> {{ $order->shipping_city }}</p>
                        <p><strong>{{ __('Postal Code') }}:</strong> {{ $order->shipping_postal_code }}</p>
                    </div>

                    <div class="order_payment">
                        <h3>{{ __('Payment Details') }}</h3>
                        <p><strong>{{ __('Payment Method') }}:</strong> {{ $order->payment_method }}</p>
                        <p><strong>{{ __('Transaction ID') }}:</strong> {{ $order->transaction_id }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION ORDER DETAIL -->
@endsection
