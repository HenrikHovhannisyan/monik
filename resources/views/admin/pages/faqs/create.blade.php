@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Создать новый FAQ' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Создать новый FAQ</h2>
            <a class="btn btn-success" href="{{ route('faqs.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Назад
            </a>
        </div>

        <form action="{{ route('faqs.store') }}" method="POST" enctype="multipart/form-data" data-bs-theme="dark">
            @csrf
            <div class="row">
                <div class="mb-3 col-12 col-lg-4">
                    <label for="question_am" class="form-label text-white">
                        Вопрос AM
                    </label>
                    <textarea class="form-control" style="height:150px" name="question_am" id="question_am"
                              placeholder="Вопрос AM">{{ old('question_am') }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="question_ru" class="form-label text-white">
                        Вопрос RU
                    </label>
                    <textarea class="form-control" style="height:150px" name="question_ru" id="question_ru"
                              placeholder="Вопрос RU">{{ old('question_ru') }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="question_en" class="form-label text-white">
                        Вопрос EN
                    </label>
                    <textarea class="form-control" style="height:150px" name="question_en" id="question_en"
                              placeholder="Вопрос EN">{{ old('question_en') }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="answer_am" class="form-label text-white">
                        Ответ AM
                    </label>
                    <textarea class="form-control" style="height:150px" name="answer_am" id="answer_am"
                              placeholder="Ответ AM">{{ old('answer_am') }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="answer_ru" class="form-label text-white">
                        Ответ RU
                    </label>
                    <textarea class="form-control" style="height:150px" name="answer_ru" id="answer_ru"
                              placeholder="Ответ RU">{{ old('answer_ru') }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="answer_en" class="form-label text-white">
                        Ответ EN
                    </label>
                    <textarea class="form-control" style="height:150px" name="answer_en" id="answer_en"
                              placeholder="Ответ EN">{{ old('answer_en') }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="status" class="form-label text-white">Статус</label>
                    <select class="form-control" id="status" name="status">
                        <option value="1" selected>Активный</option>
                        <option value="0">Неактивный</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-plus"></i>
                Добавить
            </button>
        </form>

    </div>

@endsection
