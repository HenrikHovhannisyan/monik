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
                            <a href="{{ route("products") }}">
                                {{ __("index.products") }}
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
                            <span><i class="fas fa-tag"></i>{{ __("index.have_coupon") }} <a href="checkout.html#coupon"
                                                                                             data-bs-toggle="collapse"
                                                                                             class="collapsed"
                                                                                             aria-expanded="false">{{ __("index.enter_coupon") }}</a></span>
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
                <form method="post">
                    <div class="row">
                            <div class="col-md-6">
                            <div class="heading_s1">
                                <h4>{{ __("index.billing_details") }}</h4>
                            </div>
                                <div class="ship_detail">
                                    <div class="form-group mb-3">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                       id="differentaddress">
                                                <label class="form-check-label label_info"
                                                       for="differentaddress"><span>{{ __("index.ship_to_different_address") }}</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="different_address">
                                        <div class="form-group mb-3">
                                            <div class="custom_select">
                                                <select class="form-control" name="city" required>
                                                    <option value="">{{ __('index.select_city') }}</option>
                                                    <option value="Yerevan">{{ __('index.cities.Yerevan') }}</option>
                                                    <option value="Gyumri" disabled>{{ __('index.cities.Gyumri') }}</option>
                                                    <option value="Vanadzor"
                                                            disabled>{{ __('index.cities.Vanadzor') }}</option>
                                                    <option value="Hrazdan"
                                                            disabled>{{ __('index.cities.Hrazdan') }}</option>
                                                    <option value="Vagharshapat"
                                                            disabled>{{ __('index.cities.Vagharshapat') }}</option>
                                                    <option value="Abovyan"
                                                            disabled>{{ __('index.cities.Abovyan') }}</option>
                                                    <option value="Kapan" disabled>{{ __('index.cities.Kapan') }}</option>
                                                    <option value="Ararat" disabled>{{ __('index.cities.Ararat') }}</option>
                                                    <option value="Armavir"
                                                            disabled>{{ __('index.cities.Armavir') }}</option>
                                                    <option value="Gavar" disabled>{{ __('index.cities.Gavar') }}</option>
                                                    <option value="Artashat"
                                                            disabled>{{ __('index.cities.Artashat') }}</option>
                                                    <option value="Ijevan" disabled>{{ __('index.cities.Ijevan') }}</option>
                                                    <option value="Charentsavan"
                                                            disabled>{{ __('index.cities.Charentsavan') }}</option>
                                                    <option value="Goris" disabled>{{ __('index.cities.Goris') }}</option>
                                                    <option value="Masis" disabled>{{ __('index.cities.Masis') }}</option>
                                                    <option value="Ashtarak"
                                                            disabled>{{ __('index.cities.Asharak') }}</option>
                                                    <option value="Sisian" disabled>{{ __('index.cities.Sisian') }}</option>
                                                    <option value="Spitak" disabled>{{ __('index.cities.Spitak') }}</option>
                                                    <option value="Sevan" disabled>{{ __('index.cities.Sevan') }}</option>
                                                    <option value="Martuni"
                                                            disabled>{{ __('index.cities.Martuni') }}</option>
                                                    <option value="Vardenis"
                                                            disabled>{{ __('index.cities.Vardenis') }}</option>
                                                    <option value="Yeghvard"
                                                            disabled>{{ __('index.cities.Yeghvard') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input class="form-control" type="text" name="state"
                                                   placeholder="{{ __('index.state') }}" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="address"
                                                   placeholder="{{ __('index.address') }} *" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="address2"
                                                   placeholder="{{ __('index.address2') }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input class="form-control" type="text" name="postcode"
                                                   placeholder="{{ __('index.postcode') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="heading_s1">
                                    <h4>{{ __("index.additional_information") }}</h4>
                                </div>
                                <div class="form-group mb-0">
                                    <textarea rows="5" class="form-control" placeholder="{{ __("index.order_notes") }}"></textarea>
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
                                        <tr>
                                            <td>Blue Dress For Woman <span class="product-qty">x 2</span></td>
                                            <td>$90.00</td>
                                        </tr>
                                        <tr>
                                            <td>Lether Gray Tuxedo <span class="product-qty">x 1</span></td>
                                            <td>$55.00</td>
                                        </tr>
                                        <tr>
                                            <td>woman full sliv dress <span class="product-qty">x 3</span></td>
                                            <td>$204.00</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>{{ __("index.cart_subtotal") }}</th>
                                            <td class="product-subtotal">$349.00</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __("index.shipping") }}</th>
                                            <td>{{ __("index.free_ship") }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __("index.total") }}</th>
                                            <td class="product-subtotal">$349.00</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment_method">
                                    <div class="heading_s1">
                                        <h4>{{ __("index.payment") }}</h4>
                                    </div>
                                    <div class="payment_option">
                                        <div class="custome-radio">
                                            <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" value="option3" checked="">
                                            <label class="form-check-label" for="exampleRadios3">{{ __("index.cash") }}</label>
                                            <p data-method="option3" class="payment-text">{{ __("index.cash") }}</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-fill-out btn-block">{{ __("index.checkout") }}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection
