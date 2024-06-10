@extends('layouts.app')

@section('title')
    @parent | {{ __("index.my_account") }}
@endsection

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ __("index.my_account") }}</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item">
                            <a href="{{ route("home") }}">
                                {{ __("index.home") }}
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ __("index.my_account") }}
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
                    <div class="col-lg-3 col-md-4">
                        <div class="dashboard_menu">
                            <ul class="nav nav-tabs flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="ti-layout-grid2"></i>{{ __("index.dashboard") }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="ti-shopping-cart-full"></i>{{ __("index.orders") }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="ti-location-pin"></i>{{ __("index.my_address") }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="ti-id-badge"></i>{{ __("index.account_details") }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" title="{{ __('index.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="ti-lock"></i>
                                        {{ __('index.logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>{{ __("index.dashboard") }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>{{ __("index.dashboard_message") }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>{{ __("index.orders") }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>{{ __("index.order") }}</th>
                                                    <th>{{ __("index.date") }}</th>
                                                    <th>{{ __("index.status") }}</th>
                                                    <th>{{ __("index.total") }}</th>
                                                    <th>{{ __("index.actions") }}</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>#1234</td>
                                                    <td>March 15, 2020</td>
                                                    <td>{{ __("index.processing") }}</td>
                                                    <td>$78.00 for 1 item</td>
                                                    <td><a href="#" class="btn btn-fill-out btn-sm">{{ __("index.view") }}</a></td>
                                                </tr>
                                                <tr>
                                                    <td>#2366</td>
                                                    <td>June 20, 2020	</td>
                                                    <td>{{ __("index.completed") }}</td>
                                                    <td>$78.00 for 1 item</td>
                                                    <td><a href="#" class="btn btn-fill-out btn-sm">{{ __("index.view") }}</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="card mb-3 mb-lg-0">
                                            <div class="card-header">
                                                <h3>{{ __("index.my_address") }}</h3>
                                            </div>
                                            <div class="card-body">
                                                <address>
                                                    House #15<br>
                                                    Road #1<br>
                                                    Block #C<br>
                                                    Angali<br>
                                                    Vedora<br>
                                                    1212<br>
                                                </address>
                                                <p>New York</p>
                                                <a href="#" class="btn btn-fill-out">{{ __("index.edit") }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>{{ __("index.account_details") }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" name="enq">
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>
                                                        {{ __("index.first_name") }}
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input required="" class="form-control" name="name" type="text">
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>
                                                        {{ __("index.last_name") }}
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input required="" class="form-control" name="phone">
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>
                                                        {{ __("index.display_name") }}
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input required="" class="form-control" name="dname" type="text" value="{{ $user->name }}">
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>
                                                        {{ __("index.email_address") }}
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input required="" class="form-control" name="email" type="email" value="{{ $user->email }}">
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>
                                                        {{ __("index.phone") }}
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input required="" class="form-control" name="phone" type="tel">
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>
                                                        {{ __("index.current_password") }}
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input required="" class="form-control" name="password" type="password">
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>
                                                        {{ __("index.new_password") }}
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input required="" class="form-control" name="npassword" type="password">
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>{{ __("index.confirm_password") }} <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="cpassword" type="password">
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">{{ __("index.save") }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
@endsection
