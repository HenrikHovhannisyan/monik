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
                        <a href="{{route('checkouts.index')}}" class="btn">
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
    </div>
@endsection
