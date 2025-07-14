@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Просмотр FAQ' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Просмотр FAQ</h2>
            <a class="btn btn-success" href="{{ route('faqs.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Назад
            </a>
        </div>
        <section class="content">
            <div class="card col-12 col-md-10">
                <div class="card-body p-2">
                    <ul>
                        <li class="mb-2">
                            <strong>Статус :</strong>
                            @if($faq->status)
                                <span class="text-success">Активен</span>
                            @else
                                <span class="text-danger">Неактивен</span>
                            @endif
                        </li>
                        <hr>
                        <li class="mb-2">
                            <strong>Вопрос HY :</strong>
                            <span class="text-white">
                                {!! html_entity_decode($faq->question_hy) !!}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Ответ HY :</strong>
                            <span class="text-white">
                                {!! html_entity_decode($faq->answer_hy) !!}
                            </span>
                        </li>
                        <hr>
                        <li class="mb-2">
                            <strong>Вопрос RU :</strong>
                            <span class="text-white">
                                {!! html_entity_decode($faq->question_ru) !!}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Ответ RU :</strong>
                            <span class="text-white">
                                {!! html_entity_decode($faq->answer_ru) !!}
                            </span>
                        </li>
                        <hr>
                        <li class="mb-2">
                            <strong>Вопрос EN :</strong>
                            <span class="text-white">
                                {!! html_entity_decode($faq->question_en) !!}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Ответ EN :</strong>
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
