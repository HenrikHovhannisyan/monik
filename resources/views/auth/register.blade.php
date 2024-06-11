@extends('layouts.app')

@section('title')
    @parent | {{ __("index.register") }}
@endsection

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ __("index.register") }}</h1>
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
                            {{ __("index.register") }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">
        <div class="login_register_wrap section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-10">
                        <div class="login_wrap">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h3>{{ __("index.create_account") }}</h3>
                                </div>
                                <form  method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{ __("index.enter_name") }}" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __("index.enter_email") }}" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="{{ __("index.password") }}" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" type="password" name="password_confirmation" placeholder="{{ __("index.confirm_password") }}" required autocomplete="new-password">
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-fill-out btn-block" name="register">
                                            {{ __("index.register") }}
                                        </button>
                                    </div>
                                </form>
                                <div class="different_login">
                                    <span> {{ __("index.or") }}</span>
                                </div>
                                <ul class="btn-login list_none text-center">
                                    <li><a href="{{ url('auth/google') }}" class="btn btn-google">
                                            <i class="ion-social-googleplus"></i>
                                            Google
                                        </a>
                                    </li>
                                </ul>
                                <div class="form-note text-center">
                                    {{ __("index.already_account") }}
                                    <a href="{{ route("login") }}">
                                        {{ __("index.login") }}
                                    </a>
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
