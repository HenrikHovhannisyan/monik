@extends('layouts.app')

@section('title')
    @parent | {{ __("index.contact") }}
@endsection

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{ __("index.contact") }}</h1>
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
                            {{ __("index.contact") }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION CONTACT -->
        <div class="section pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="heading_s1">
                            <h2>{{ __("index.get_in_touch") }}</h2>
                        </div>
                        <p class="leads">
                            {{ __("index.contact_info_text") }}
                        </p>
                        <div class="field_form">
                            <form method="post">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <input
                                            required
                                            placeholder="{{ __("index.enter_name_placeholder") }} *"
                                            id="first-name"
                                            class="form-control"
                                            name="name"
                                            type="text"
                                        />
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <input
                                            required
                                            placeholder="{{ __("index.enter_name_placeholder") }} *"
                                            id="email"
                                            class="form-control"
                                            name="email"
                                            type="email"
                                        />
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <input
                                            required
                                            placeholder="{{ __("index.enter_phone_placeholder") }} *"
                                            id="phone"
                                            class="form-control"
                                            name="phone"
                                        />
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <input
                                            placeholder="{{ __("index.enter_subject_placeholder") }}"
                                            id="subject"
                                            class="form-control"
                                            name="subject"
                                        />
                                    </div>
                                    <div class="form-group col-md-12 mb-3">
                                          <textarea
                                              required
                                              placeholder="{{ __("index.message_placeholder") }} *"
                                              id="description"
                                              class="form-control"
                                              name="message"
                                              rows="4"
                                          ></textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button
                                            type="submit"
                                            title="{{ __("index.send_message") }}"
                                            class="btn btn-fill-out"
                                            id="submitButton"
                                            name="submit"
                                            value="Submit"
                                        >
                                            {{ __("index.send_message") }}
                                        </button>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div id="alert-msg" class="alert-msg text-center"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
                        <div style="width: 100%">
                            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"
                                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Yerevan+(Yerevan)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection
