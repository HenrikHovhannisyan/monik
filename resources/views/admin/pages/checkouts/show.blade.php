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
                <div class="card-body p-2">
                    <div class="col-12 text-white">
                        <div class="order_summary">
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
                        <div class="order_items">
                            <h3>Products</h3>
                            <div class="table-responsive">
                                <table class="table table-dark table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($checkout->orderItems as $item)
                                        <tr>
                                            <td>
                                                <a href="{{ route('product', $item->product_id) }}">
                                                    <img src="{{ asset(json_decode($item->product->images)[0]) }}"
                                                         width="100" alt="{{ $item->product->{lang('name')} }}">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('product', $item->product_id) }}">
                                                    {{ $item->product->name_en }}
                                                </a>
                                            </td>
                                            <td>{{ $item->quantity }}</td>
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
                                            <td>{{ $item->quantity * $item->price }}֏</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="order_shipping">
                            <h3>Shipping Details</h3>
                            <p class="text-capitalize">
                                <strong>City:</strong>
                                {{ $checkout->shippingAddress->city }}
                            </p>
                            <p class="text-capitalize">
                                <strong>State:</strong>
                                {{ $checkout->shippingAddress->state }}
                            </p>
                            <p class="text-capitalize">
                                <strong>Address:</strong>
                                {{ $checkout->shippingAddress->address }}
                            </p>
                            @if($checkout->shippingAddress->address2)
                                <p class="text-capitalize">
                                    <strong>Address 2:</strong>
                                    {{ $checkout->shippingAddress->address2 }}
                                </p>
                            @endif
                            <p class="text-capitalize">
                                <strong>Postcode:</strong>
                                {{ $checkout->shippingAddress->postcode }}
                            </p>
                        </div>
                        <div class="customer_info">
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
                        </div>
                        <div class="order_payment">
                            <h3>Payment Details</h3>
                            <p class="text-capitalize">
                                <strong>Payment Method:</strong>
                                {{ $checkout->payment_option }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
