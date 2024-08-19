@extends('layouts.app')

@section('title')
    @parent | {{ __("index.order_completed") }}
@endsection

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ __("index.order_completed") }}</h1>
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
                        <li class="breadcrumb-item text-dark">
                            {{ __("index.checkout") }}
                        </li>
                        <li class="breadcrumb-item active">{{ __("index.order_completed") }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center order_complete">
                        <i class="fas fa-check-circle"></i>
                        <div class="heading_s1">
                            <h3>{{ __("index.order_completed_message") }}</h3>
                        </div>
                        <p>{{ __("index.order_thank_you") }}</p>
                        <a href="{{ route('products') }}" class="btn btn-fill-out">{{ __("index.continue_shopping") }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
@endsection
