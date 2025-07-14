@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Редактировать FAQ' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Редактировать FAQ</h2>
            <a class="btn btn-success" href="{{ route('faqs.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Назад
            </a>
        </div>

        <form action="{{ route('faqs.update', $faq->id) }}" method="POST" enctype="multipart/form-data" data-bs-theme="dark">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="mb-3 col-12 col-lg-4">
                    <label for="question_am" class="form-label text-white">
                        Вопрос HY
                    </label>
                    <textarea class="form-control" style="height:150px" name="question_hy" id="question_am"
                              placeholder="Введите вопрос на армянском">{{ old('question_hy', $faq->question_hy) }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="question_ru" class="form-label text-white">
                        Вопрос RU
                    </label>
                    <textarea class="form-control" style="height:150px" name="question_ru" id="question_ru"
                              placeholder="Введите вопрос на русском">{{ old('question_ru', $faq->question_ru) }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="question_en" class="form-label text-white">
                        Вопрос EN
                    </label>
                    <textarea class="form-control" style="height:150px" name="question_en" id="question_en"
                              placeholder="Введите вопрос на английском">{{ old('question_en', $faq->question_en) }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="answer_am" class="form-label text-white">
                        Ответ HY
                    </label>
                    <textarea class="form-control" style="height:150px" name="answer_hy" id="answer_am"
                              placeholder="Введите ответ на армянском">{{ old('answer_hy', $faq->answer_hy) }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="answer_ru" class="form-label text-white">
                        Ответ RU
                    </label>
                    <textarea class="form-control" style="height:150px" name="answer_ru" id="answer_ru"
                              placeholder="Введите ответ на русском">{{ old('answer_ru', $faq->answer_ru) }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="answer_en" class="form-label text-white">
                        Ответ EN
                    </label>
                    <textarea class="form-control" style="height:150px" name="answer_en" id="answer_en"
                              placeholder="Введите ответ на английском">{{ old('answer_en', $faq->answer_en) }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="status" class="form-label text-white">Статус</label>
                    <select class="form-control" id="status" name="status">
                        <option value="1" {{ $faq->status ? 'selected' : '' }}>Активен</option>
                        <option value="0" {{ !$faq->status ? 'selected' : '' }}>Неактивен</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-save"></i>
                Сохранить
            </button>
        </form>

    </div>

@endsection
