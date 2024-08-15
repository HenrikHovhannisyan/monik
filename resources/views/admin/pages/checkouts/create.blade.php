@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Create New Faq' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Create New Faq</h2>
            <a class="btn btn-success" href="{{ route('faqs.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Back
            </a>
        </div>

        <form action="{{ route('faqs.store') }}" method="POST" enctype="multipart/form-data" data-bs-theme="dark">
            @csrf
            <div class="row">
                <div class="mb-3 col-12 col-lg-4">
                    <label for="question_am" class="form-label text-white">
                        Question AM
                    </label>
                    <textarea class="form-control" style="height:150px" name="question_am" id="question_am"
                              placeholder="Question AM">{{ old('question_am') }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="question_ru" class="form-label text-white">
                        Question RU
                    </label>
                    <textarea class="form-control" style="height:150px" name="question_ru" id="question_ru"
                              placeholder="Question RU">{{ old('question_ru') }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="question_en" class="form-label text-white">
                        Question EN
                    </label>
                    <textarea class="form-control" style="height:150px" name="question_en" id="question_en"
                              placeholder="Question EN">{{ old('question_en') }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="answer_am" class="form-label text-white">
                        Answer AM
                    </label>
                    <textarea class="form-control" style="height:150px" name="answer_am" id="answer_am"
                              placeholder="Answer AM">{{ old('answer_am') }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="answer_ru" class="form-label text-white">
                        Answer RU
                    </label>
                    <textarea class="form-control" style="height:150px" name="answer_ru" id="answer_ru"
                              placeholder="Answer RU">{{ old('answer_ru') }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="answer_en" class="form-label text-white">
                        Answer EN
                    </label>
                    <textarea class="form-control" style="height:150px" name="answer_en" id="answer_en"
                              placeholder="Answer EN">{{ old('answer_en') }}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="status" class="form-label text-white">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-plus"></i>
                Add
            </button>
        </form>

    </div>

@endsection
