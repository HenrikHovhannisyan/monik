@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Редактировать категорию' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Редактировать категорию</h2>
            <a class="btn btn-success" href="{{ route('categories.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Назад
            </a>
        </div>

        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" data-bs-theme="dark">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="mb-3 col-12 col-lg-4">
                    <label for="name_am" class="form-label text-white">
                        Название HY
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name_hy" id="name_am" value="{{ $category->name_hy }}" class="form-control"
                           placeholder="Название HY" required>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="name_ru" class="form-label text-white">
                        Название RU
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name_ru" id="name_ru" value="{{ $category->name_ru }}" class="form-control"
                           placeholder="Название RU" required>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="name_en" class="form-label text-white">
                        Название EN
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name_en" id="name_en" value="{{ $category->name_en }}" class="form-control"
                           placeholder="Название EN" required>
                </div>

                <div class="mb-3 col-12 col-lg-4">
                    <label for="description_am" class="form-label text-white">
                        Описание HY
                    </label>
                    <textarea class="form-control" style="height:150px" name="description_hy" id="description_am"
                              placeholder="Описание HY">{{ $category->description_hy }}</textarea>
                </div>

                <div class="mb-3 col-12 col-lg-4">
                    <label for="description_ru" class="form-label text-white">
                        Описание RU
                    </label>
                    <textarea class="form-control" style="height:150px" name="description_ru" id="description_ru"
                              placeholder="Описание RU">{{ $category->description_ru }}</textarea>
                </div>

                <div class="mb-3 col-12 col-lg-4">
                    <label for="description_en" class="form-label text-white">
                        Описание EN
                    </label>
                    <textarea class="form-control" style="height:150px" name="description_en" id="description_en"
                              placeholder="Описание EN">{{ $category->description_en }}</textarea>
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="imageUpload" class="form-label text-white">
                        Загрузить изображение
                    </label>
                    <div class="border border-secondary rounded p-3 mb-3">
                        <div class="file-wrapper">
                            <input type="file" name="image" id="imageUpload" class="d-none"/>
                            <img src="{{ asset( $category->image ) }}" id="imagePreview" width="200px"
                                 onclick="document.getElementById('imageUpload').click();"/>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fa-solid fa-pen-to-square"></i>
                Обновить
            </button>
        </form>

    </div>

@endsection
