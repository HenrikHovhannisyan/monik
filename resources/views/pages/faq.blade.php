@extends('layouts.app')

@section('title')
    @parent | {{ __("index.faqs") }}
@endsection

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ __("index.faqs") }}</h1>
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
                            {{ __("index.faqs") }}
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">
        <div class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="heading_s1 mb-3 mb-md-5">
                            <h3>{{ __("index.faqs") }}</h3>
                        </div>
                        <div id="accordion" class="accordion accordion_style1">
                            @foreach($faqs as $faq)
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-bs-toggle="collapse" href="#faq{{ $faq->id }}" aria-expanded="false" aria-controls="faq{{ $faq->id }}">
                                                {!! html_entity_decode($faq->{lang('question')}) !!}
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="faq{{ $faq->id }}" class="collapse" aria-labelledby="headingFive"
                                         data-bs-parent="#accordion">
                                        <div class="card-body">
                                            {!! html_entity_decode($faq->{lang('answer')}) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection
