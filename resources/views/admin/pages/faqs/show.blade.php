@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Show FAQ' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Show FAQ</h2>
            <a class="btn btn-success" href="{{ route('faqs.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Back
            </a>
        </div>
        <section class="content">
            <div class="card col-12 col-md-10">
                <div class="card-body p-2">
                    <ul>
                        <li class="mb-2">
                            <strong>Status :</strong>
                            @if($faq->status)
                                <span class="text-success">Active</span>
                            @else
                                <span class="text-danger">Inactive</span>
                            @endif
                        </li>
                        <hr>
                        <li class="mb-2">
                            <strong>Question AM :</strong>
                            <span class="text-white">
                                {!! html_entity_decode($faq->question_am) !!}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Answer AM :</strong>
                            <span class="text-white">
                                {!! html_entity_decode($faq->answer_am) !!}
                            </span>
                        </li>
                        <hr>
                        <li class="mb-2">
                            <strong>Question RU :</strong>
                            <span class="text-white">
                                {!! html_entity_decode($faq->question_ru) !!}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Answer RU :</strong>
                            <span class="text-white">
                                {!! html_entity_decode($faq->answer_ru) !!}
                            </span>
                        </li>
                        <hr>
                        <li class="mb-2">
                            <strong>Question EN :</strong>
                            <span class="text-white">
                                {!! html_entity_decode($faq->question_en) !!}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Answer EN :</strong>
                            <span class="text-white">
                                {!! html_entity_decode($faq->answer_en) !!}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection
