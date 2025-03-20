@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Show Checkout' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Show Checkout</h2>
            <a class="btn btn-success" href="{{ url()->previous() }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Back
            </a>
        </div>
        <section class="content">
            <div class="card col-12 col-md-10">
                <div class="card-body p-2 text-white">
                    <div class="row">
                        <div class="col-xl-4 mb-3 order_summary">
                            <h3>Order Details</h3>
                            <p>
                                <strong>Order Number:</strong>
                                {{ $checkout->id }}
                            </p>
                            <p>
                                <strong>Order Date:</strong>
                                {{ $checkout->created_at->format('Y-m-d') }}
                            </p>
                            <p>
                                <strong>Cart:</strong>
                                {{ $checkout->cart_price }}֏
                            </p>
                            <p>
                                <strong>Shipping:</strong>
                                {{ floor($checkout->shipping_cost) }}֏ <span class="text-capitalize">({{ $checkout->shipping_option }})</span>
                            </p>
                            <p>
                                <strong>Total:</strong>
                                {{ $checkout->total_price }}֏
                            </p>
                            <p class="text-capitalize">
                                <strong>Status:</strong>
                                @if($checkout->status === 'processing')
                                    <span class="text-primary">Processing</span>
                                @elseif($checkout->status === 'pending')
                                    <span class="text-warning">Pending</span>
                                @elseif($checkout->status === 'completed')
                                    <span class="text-success">Completed</span>
                                @else
                                    <span class="text-danger">Cancel</span>
                                @endif
                            </p>
                        </div>
                        <div class="col-xl-4 mb-3 order_shipping">
                            <h3>Shipping Details</h3>
                            @if($checkout->shippingAddress)
                                <p class="text-capitalize">
                                    <strong>City:</strong>
                                    {{ $checkout->shippingAddress->city }}
                                </p>
                                <p class="text-capitalize">
                                    <strong>Region:</strong>
                                    {{ $checkout->shippingAddress->region }}
                                </p>
                                <p class="text-capitalize">
                                    <strong>Street:</strong>
                                    {{ $checkout->shippingAddress->street }}
                                </p>
                                <p class="text-capitalize">
                                    <strong>House Number:</strong>
                                    {{ $checkout->shippingAddress->house_number }}
                                </p>
                                @if($checkout->shippingAddress->postcode)
                                    <p class="text-capitalize">
                                        <strong>Postcode:</strong>
                                        {{ $checkout->shippingAddress->postcode }}
                                    </p>
                                @endif
                                @if($checkout->shippingAddress->address)
                                    <p class="text-capitalize">
                                        <strong>Address:</strong>
                                        {{ $checkout->shippingAddress->address }}
                                    </p>
                                @endif
                                @if($checkout->order_notes)
                                    <p class="text-capitalize">
                                        <strong>Order Notes:</strong>
                                        {{ $checkout->order_notes }}
                                    </p>
                                @endif

                                @if($checkout->shippingAddress->address)
                                    <a href="https://yandex.ru/maps/?text={{ urlencode($checkout->shippingAddress->address) }}"
                                       class="btn btn-danger text-bg-danger" target="_blank">
                                        <i class="fa-solid fa-location-dot fa-beat"></i>
                                        Open in Yandex map
                                    </a>
                                @else
                                    <a href="https://yandex.ru/maps/?text={{ urlencode($checkout->shippingAddress->city) }}, {{ urlencode($checkout->shippingAddress->region) }}, {{ urlencode($checkout->shippingAddress->street) }}, {{ urlencode($checkout->shippingAddress->house_number) }}"
                                       class="btn btn-danger text-bg-danger" target="_blank">
                                        <i class="fa-solid fa-location-dot fa-beat"></i>
                                        Open in Yandex map
                                    </a>
                                @endif
                            @else
                                <p>{{ __('index.no_shipping_address') }}</p>
                            @endif
                        </div>
                        <div class="col-xl-4 mb-3 customer_info">
                            <span>
                                <h3>Customer Details</h3>
                                <p><strong>Name:</strong> {{ $checkout->user->name }}</p>
                                <p>
                                    <strong>Email:</strong>
                                    <a href="mailto:{{ $checkout->user->email }}">
                                        {{ $checkout->user->email }}
                                    </a>
                                </p>
                                <p><strong>Phones:</strong></p>
                                <ul>
                                    @if($checkout->user->account && $checkout->user->account->phones->isNotEmpty())
                                        @foreach($checkout->user->account->phones as $phone)
                                            <li>
                                                <a href="tel:{{ $phone->phone_number }}">
                                                    {{ $phone->phone_number }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li>No phones available</li>
                                    @endif
                                </ul>
                            </span>
                            <div class="order_payment">
                                <h3>Payment Details</h3>
                                <p class="text-capitalize">
                                    <strong>Payment Method:</strong>
                                    {{ $checkout->payment_option }}
                                </p>
                            </div>
                            @if($checkout->promocode)
                                <div class="promocode">
                                    <h3>Promocode Details:</h3>
                                    <p class="text-capitalize">
                                        <strong>Promocode:</strong> {{ $checkout->promocode->code }}
                                    </p>
                                    <p>
                                        <strong>Discount:</strong> {{ $checkout->promocode->discount }}%
                                    </p>
                                    <p>
                                        <strong>Type:</strong> {{ $checkout->promocode->type }}
                                    </p>
                                </div>
                            @endif
                        </div>
                        <hr>
                        <div class="col-12 order_items">
                            <h3>Products</h3>
                            <div class="table-responsive">
                                <table class="table table-dark table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Product</th>
                                        <th>Size</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($checkout->orderItems as $item)
                                        <tr>
                                            <td>
                                                <a href="{{ route('product', $item->product->slug) }}">
                                                    <img src="{{ asset(json_decode($item->product->images)[0]) }}"
                                                         width="100" alt="{{ $item->product->{lang('name')} }}">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('product', $item->product->slug) }}">
                                                    {{ $item->product->name_en }}
                                                </a>
                                            </td>
                                            <td>{{ $item->size }}</td>
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
        </section>
    </div>
@endsection
