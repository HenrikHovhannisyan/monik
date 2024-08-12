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
                                    <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false" title="{{ __("index.dashboard") }}">
                                        <i class="ti-layout-grid2"></i>
                                        {{ __("index.dashboard") }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false" title="{{ __("index.orders") }}">
                                        <i class="ti-shopping-cart-full"></i>
                                        {{ __("index.orders") }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true" title="{{ __("index.my_address") }}">
                                        <i class="ti-location-pin"></i>
                                        {{ __("index.my_addresses") }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true" title="{{ __("index.account_details") }}">
                                        <i class="ti-id-badge"></i>
                                        {{ __("index.account_details") }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" data-bs-toggle="modal" data-bs-target="#logoutModal" title="{{ __('index.logout') }}">
                                        <i class="ti-lock"></i>
                                        {{ __('index.logout') }}
                                    </a>
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
                                                @foreach($orders->values() as $index => $order)
                                                    <tr>
                                                        <td class="p-2">{{ $index + 1 }}</td>
                                                        <td class="p-2">{{ $order->created_at->format('Y-m-d') }}</td>
                                                        <td class="p-2">{{ __("index." . $order->status) }}</td>
                                                        <td class="p-2">{{ floor($order->total_price) }}֏ - {{ $order->orderItems->sum('quantity') }}</td>
                                                        <td class="p-2">
                                                            <a href="{{ route('order-items.show', $order->id) }}" class="btn btn-fill-out btn-sm">
                                                                {{ __("index.view") }}
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

                            <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="card mb-3 mb-lg-0">
                                            <div class="card-header d-flex justify-content-between">
                                                <h3>{{ __("index.my_addresses") }}</h3>
                                                <button type="button" class="btn btn-fill-out btn-sm" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                                    {{ __("index.add_address") }}
                                                </button>
                                            </div>
                                            <div class="card-body">
                                                @if($user->addresses->isEmpty())
                                                    <p>{{ __("index.no_address_message") }}</p>
                                                    <button type="button" class="btn btn-fill-out btn-sm" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                                        {{ __("index.add_address") }}
                                                    </button>
                                                @else
                                                    @foreach($user->addresses as $address)
                                                        <address>
                                                            {{ $address->state }}<br>
                                                            {{ $address->address }}<br>
                                                            @if($address->address2)
                                                                {{ $address->address2 }}<br>
                                                            @endif
                                                            {{ $address->postcode }}<br>
                                                        </address>
                                                        <p>{{ $address->city }}</p>
                                                        <div class="d-flex">
                                                            <a href="#" class="btn btn-fill-out btn-sm" data-bs-toggle="modal" data-bs-target="#editAddressModal{{ $address->id }}">
                                                                {{ __("index.edit") }}
                                                            </a>
                                                            <form action="{{ route('addresses.destroy', ['address' => $address->id]) }}" method="POST" class="ms-2">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-line-fill btn-sm">
                                                                    {{ __("index.delete") }}
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <hr>

                                                        <!-- Edit Address Modal -->
                                                        <div class="modal fade" id="editAddressModal{{ $address->id }}" tabindex="-1">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header border-0">
                                                                        <h2 class="modal-title fs-5" id="editModalLabel">
                                                                            {{ __('index.edit_address') }}
                                                                        </h2>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        @isset($address)
                                                                            <form method="post" action="{{ route('addresses.update', ['address' => $address->id]) }}">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="form-group mb-3">
                                                                                    <div class="custom_select">
                                                                                        <select class="form-control" name="city" required>
                                                                                            <option value="">{{ __('index.select_city') }}</option>
                                                                                            <option value="Yerevan" {{ $address->city == 'Yerevan' ? 'selected' : '' }}>{{ __('index.cities.Yerevan') }}</option>
                                                                                            <option value="Gyumri" {{ $address->city == 'Gyumri' ? 'selected' : '' }} disabled>{{ __('index.cities.Gyumri') }}</option>
                                                                                            <option value="Vanadzor" {{ $address->city == 'Vanadzor' ? 'selected' : '' }} disabled>{{ __('index.cities.Vanadzor') }}</option>
                                                                                            <option value="Hrazdan" {{ $address->city == 'Hrazdan' ? 'selected' : '' }} disabled>{{ __('index.cities.Hrazdan') }}</option>
                                                                                            <option value="Vagharshapat" {{ $address->city == 'Vagharshapat' ? 'selected' : '' }} disabled>{{ __('index.cities.Vagharshapat') }}</option>
                                                                                            <option value="Abovyan" {{ $address->city == 'Abovyan' ? 'selected' : '' }} disabled>{{ __('index.cities.Abovyan') }}</option>
                                                                                            <option value="Kapan" {{ $address->city == 'Kapan' ? 'selected' : '' }} disabled>{{ __('index.cities.Kapan') }}</option>
                                                                                            <option value="Ararat" {{ $address->city == 'Ararat' ? 'selected' : '' }} disabled>{{ __('index.cities.Ararat') }}</option>
                                                                                            <option value="Armavir" {{ $address->city == 'Armavir' ? 'selected' : '' }} disabled>{{ __('index.cities.Armavir') }}</option>
                                                                                            <option value="Gavar" {{ $address->city == 'Gavar' ? 'selected' : '' }} disabled>{{ __('index.cities.Gavar') }}</option>
                                                                                            <option value="Artashat" {{ $address->city == 'Artashat' ? 'selected' : '' }} disabled>{{ __('index.cities.Artashat') }}</option>
                                                                                            <option value="Ijevan" {{ $address->city == 'Ijevan' ? 'selected' : '' }} disabled>{{ __('index.cities.Ijevan') }}</option>
                                                                                            <option value="Charentsavan" {{ $address->city == 'Charentsavan' ? 'selected' : '' }} disabled>{{ __('index.cities.Charentsavan') }}</option>
                                                                                            <option value="Goris" {{ $address->city == 'Goris' ? 'selected' : '' }} disabled>{{ __('index.cities.Goris') }}</option>
                                                                                            <option value="Masis" {{ $address->city == 'Masis' ? 'selected' : '' }} disabled>{{ __('index.cities.Masis') }}</option>
                                                                                            <option value="Ashtarak" {{ $address->city == 'Ashtarak' ? 'selected' : '' }} disabled>{{ __('index.cities.Asharak') }}</option>
                                                                                            <option value="Sisian" {{ $address->city == 'Sisian' ? 'selected' : '' }} disabled>{{ __('index.cities.Sisian') }}</option>
                                                                                            <option value="Spitak" {{ $address->city == 'Spitak' ? 'selected' : '' }} disabled>{{ __('index.cities.Spitak') }}</option>
                                                                                            <option value="Sevan" {{ $address->city == 'Sevan' ? 'selected' : '' }} disabled>{{ __('index.cities.Sevan') }}</option>
                                                                                            <option value="Martuni" {{ $address->city == 'Martuni' ? 'selected' : '' }} disabled>{{ __('index.cities.Martuni') }}</option>
                                                                                            <option value="Vardenis" {{ $address->city == 'Vardenis' ? 'selected' : '' }} disabled>{{ __('index.cities.Vardenis') }}</option>
                                                                                            <option value="Yeghvard" {{ $address->city == 'Yeghvard' ? 'selected' : '' }} disabled>{{ __('index.cities.Yeghvard') }}</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <input class="form-control" type="text" name="state" placeholder="{{ __('index.state') }}"
                                                                                           value="{{ $address->state }}" required>
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <input type="text" class="form-control" name="address"
                                                                                           placeholder="{{ __('index.address') }} *"
                                                                                           value="{{ $address->address }}" required>
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <input type="text" class="form-control" name="address2"
                                                                                           placeholder="{{ __('index.address2') }}"
                                                                                           value="{{ $address->address2 }}">
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <input class="form-control" type="text" name="postcode"
                                                                                           placeholder="{{ __('index.postcode') }}"
                                                                                           value="{{ $address->postcode }}" required>
                                                                                </div>
                                                                                <div class="d-flex justify-content-between">
                                                                                    <button type="submit" class="btn btn-fill-out btn-sm">
                                                                                        {{ __('index.save') }}
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-line-fill btn-sm" data-bs-dismiss="modal">
                                                                                        {{ __('index.cancel') }}
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        @endisset
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
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
                                        <form method="POST" action="{{ route('account.update', $user->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>{{ __("index.first_name") }}<span class="required">*</span></label>
                                                    <input required class="form-control @error('first_name') is-invalid @enderror" name="first_name" type="text" value="{{ $user->account->first_name ?? '' }}">
                                                    @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>{{ __("index.last_name") }}<span class="required">*</span></label>
                                                    <input required class="form-control @error('last_name') is-invalid @enderror" name="last_name" type="text" value="{{ $user->account->last_name ?? '' }}">
                                                    @error('last_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>{{ __("index.display_name") }}<span class="required">*</span></label>
                                                    <input required class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{ $user->name }}">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>{{ __("index.email_address") }}<span class="required">*</span></label>
                                                    <input required class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{ $user->email }}">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="phone-container">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label>{{ __("index.phone") }}<span class="required">*</span></label>
                                                        <button type="button" class="btn btn-sm btn-outline-secondary add-phone">{{ __("index.add_phone") }}</button>
                                                    </div>
                                                    @if($user->account && $user->account->phones && count($user->account->phones) > 0)
                                                        @foreach($user->account->phones as $phone)
                                                            <div class="form-group col-md-12 mb-3 phone-group d-flex">
                                                                <input required class="form-control" name="phone[]" type="tel" value="{{ $phone->phone_number }}">
                                                                <button type="button" class="btn btn-sm btn-danger remove-phone" style="display: none;">
                                                                    <i class="fa-regular fa-trash-can remove-phone"></i>
                                                                </button>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="form-group col-md-12 mb-3 phone-group d-flex">
                                                            <input required class="form-control" name="phone[]" type="tel">
                                                            <button type="button" class="btn btn-sm btn-danger remove-phone" style="display: none;">
                                                                <i class="fa-regular fa-trash-can remove-phone"></i>
                                                            </button>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>{{ __("index.new_password") }}<span class="required">*</span></label>
                                                    <input class="form-control @error('password') is-invalid @enderror" name="password" type="password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>{{ __("index.confirm_password") }}<span class="required">*</span></label>
                                                    <input class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password">
                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-fill-out">{{ __("index.save") }}</button>
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
    </div>
        <!-- END MAIN CONTENT -->
@endsection
