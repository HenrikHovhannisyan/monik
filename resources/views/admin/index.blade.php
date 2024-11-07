@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="text-center text-white">
                        <i class="fa-solid fa-users fa-5x"></i>
                    </div>
                    <div class="d-flex justify-content-between align-items-start mt-3">
                        <h3 class="m-0">Users - {{ $usersCount }}</h3>
                        <a href="{{route('users')}}" class="btn">
                            View
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="text-center text-white">
                        <i class="fa-solid fa-layer-group fa-5x"></i>
                    </div>
                    <div class="d-flex justify-content-between align-items-start mt-3">
                        <h3 class="m-0">Category - {{ $categoryCount }}</h3>
                        <a href="{{route('categories.index')}}" class="btn">
                            View
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="text-center text-white">
                        <i class="fa-solid fa-shirt fa-5x"></i>
                    </div>
                    <div class="d-flex justify-content-between align-items-start mt-3">
                        <h3 class="m-0">Products - {{ $productCount }}</h3>
                        <a href="{{route('products.index')}}" class="btn">
                            View
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="text-center text-white">
                        <i class="fa-solid fa-cart-shopping fa-5x"></i>
                    </div>
                    <div class="d-flex justify-content-between align-items-start mt-3">
                        <h3 class="m-0">Checkouts - {{ $checkoutCount }}</h3>
                        <a href="{{route('checkouts-admin.index')}}" class="btn">
                            View
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="text-center text-white">
                        <i class="fa-solid fa-barcode fa-5x"></i>
                    </div>
                    <div class="d-flex justify-content-between align-items-start mt-3">
                        <h3 class="m-0">Promocodes - {{ $promocodeCount }}</h3>
                        <a href="{{route('promocodes.index')}}" class="btn">
                            View
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="text-center text-white">
                        <i class="fa-solid fa-clipboard-question fa-5x"></i>
                    </div>
                    <div class="d-flex justify-content-between align-items-start mt-3">
                        <h3 class="m-0">Faqs - {{ $faqCount }}</h3>
                        <a href="{{route('faqs.index')}}" class="btn">
                            View
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <h2 class="text-white mb-3">Orders list</h2>
            <div class="col-lg-6 mb-3">
                <h4 class="text-white mb-3">
                    <i class="fa-solid fa-n fa-beat text-success"></i>
                    <i class="fa-solid fa-e fa-beat text-success"></i>
                    <i class="fa-solid fa-w fa-beat text-success"></i>
                    Processing list <span class="fs-6">(Новые заказы)</span>
                </h4>
                <div class="table-responsive">
                    <table class="table table-dark table-striped table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Sum</th>
                            <th scope="col">Payment</th>
                            <th width="80px">{{ 'Action' }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($processingCheckouts as $checkout)
                            <tr>
                                <td>{{ $checkout->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <form action="{{ route('checkouts.changeStatusPending', $checkout->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-outline-warning btn-sm m-1">
                                            Change status to "Pending"
                                        </button>
                                    </form>
                                </td>
                                <td>{{ floor($checkout->total_price) }}֏</td>
                                <td>
                                    <p class="text-capitalize">
                                        {{ $checkout->payment_option }}
                                    </p>
                                </td>
                                <td>
                                    <a class="btn btn-outline-success btn-sm m-1"
                                       href="{{ route('checkouts.show',$checkout->id) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <h4 class="text-white mb-3">
                    <i class="fa-solid fa-truck fa-beat text-warning"></i>
                    Pending list <span class="fs-6">(В доставке)</span>
                </h4>
                <div class="table-responsive">
                    <table class="table table-dark table-striped table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Sum</th>
                            <th scope="col">Payment</th>
                            <th width="80px">{{ 'Action' }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($pendingCheckouts as $checkout)
                            <tr>
                                <td>{{ $checkout->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <form action="{{ route('checkouts.changeStatusCompleted', $checkout->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-outline-warning btn-sm m-1">
                                            Change status to "Completed"
                                        </button>
                                    </form>
                                </td>
                                <td>{{ floor($checkout->total_price) }}֏</td>
                                <td>
                                    {{ $checkout->payment_option }}
                                </td>
                                <td>
                                    <a class="btn btn-outline-success btn-sm m-1"
                                       href="{{ route('checkouts.show',$checkout->id) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
