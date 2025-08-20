@extends('layouts.app')

@section('title')
    @parent | {{ __("privacy.title") }}
@endsection

@section('content')
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>{{ __("privacy.title") }}</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">{{ __("index.home") }}</a>
                    </li>
                    <li class="breadcrumb-item active">{{ __("privacy.title") }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="main_content">
    <div class="section">
        <div class="container">
            <div class="privacy-policy-container">

                <section class="mb-4">
                    <h3>{{ __("privacy.general") }}</h3>
                    <p>{!! __("privacy.intro") !!}</p>
                </section>

                <section class="mb-4">
                    <h3>{{ __("privacy.collect.title") }}</h3>
                    <p class="mb-0">{!! __("privacy.collect.text") !!}</p>
                    <ul>
                        @foreach(__('privacy.collect.list') as $item)
                            <li>{!! $item !!}</li>
                        @endforeach
                    </ul>
                    <p>{!! __("privacy.collect.note") !!}</p>
                </section>

                <section class="mb-4">
                    <h3>{{ __("privacy.usage.title") }}</h3>
                    <ul>
                        @foreach(__('privacy.usage.list') as $item)
                            <li>{!! $item !!}</li>
                        @endforeach
                    </ul>
                </section>

                <section class="mb-4">
                    <h3>{{ __("privacy.non-disclosure.title") }}</h3>
                    <p>{!! __("privacy.non-disclosure.text") !!}</p>
                </section>

                <section class="mb-4">
                    <h3>{{ __("privacy.security.title") }}</h3>
                    <ul>
                        @foreach(__('privacy.security.list') as $item)
                            <li>{!! $item !!}</li>
                        @endforeach
                    </ul>
                </section>

                <section class="mb-4">
                    <h3>{{ __("privacy.contacts.title") }}</h3>
                    <p>{!! __("privacy.contacts.email") !!}</p>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection
