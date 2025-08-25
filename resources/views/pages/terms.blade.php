@extends('layouts.app')

@section('title')
    @parent | {{ __("terms.title") }}
@endsection

@section('content')
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>{{ __("terms.title") }}</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">{{ __("index.home") }}</a>
                    </li>
                    <li class="breadcrumb-item active">{{ __("terms.title") }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="main_content">
    <div class="section">
        <div class="container">
            <div class="terms-container">

                {{-- Introduction --}}
                <section class="mb-4">
                    <h3>{{ __("terms.intro_title") }}</h3>
                    <p>{!! __("terms.intro_text") !!}</p>
                </section>

                {{-- Registration --}}
                <section class="mb-4">
                    <h3>{{ __("terms.registration.title") }}</h3>
                    <p>{!! __("terms.registration.text") !!}</p>
                </section>

                {{-- Orders --}}
                <section class="mb-4">
                    <h3>{{ __("terms.orders.title") }}</h3>
                    <ul>
                        @foreach(__('terms.orders.list') as $item)
                            <li>{!! $item !!}</li>
                        @endforeach
                    </ul>
                </section>

                {{-- Payment --}}
                <section class="mb-4">
                    <h3>{{ __("terms.payment.title") }}</h3>
                    <ul>
                        @foreach(__('terms.payment.list') as $item)
                            <li>{!! $item !!}</li>
                        @endforeach
                    </ul>
                </section>

                {{-- Returns --}}
                <section class="mb-4">
                    <h3>{{ __("terms.returns.title") }}</h3>
                    <p>{!! __("terms.returns.text") !!}</p>
                    <ul>
                        @foreach(__('terms.returns.list') as $item)
                            <li>{!! $item !!}</li>
                        @endforeach
                    </ul>
                </section>

                {{-- Accounts --}}
                <section class="mb-4">
                    <h3>{{ __("terms.accounts.title") }}</h3>
                    <ul>
                        @foreach(__('terms.accounts.list') as $item)
                            <li>{!! $item !!}</li>
                        @endforeach
                    </ul>
                </section>

                {{-- Responsibility --}}
                <section class="mb-4">
                    <h3>{{ __("terms.responsibility.title") }}</h3>
                    <p>{!! __("terms.responsibility.text") !!}</p>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection
