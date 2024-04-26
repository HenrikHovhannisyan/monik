@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Create New Category' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Create New Category</h2>
            <a class="btn btn-success" href="{{ route('categories.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Back
            </a>
        </div>

        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" data-bs-theme="dark">
            @csrf
            <div class="row">
                <div class="mb-3 col-12 col-md-4">
                    <label for="name_am" class="form-label text-white">
                        Name AM
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name_am" id="name_am" value="{{old('name_am')}}" class="form-control"
                           placeholder="Name AM" required>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="name_ru" class="form-label text-white">
                        Name RU
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name_ru" id="name_ru" value="{{old('name_ru')}}" class="form-control"
                           placeholder="Name RU" required>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="name_en" class="form-label text-white">
                        Name EN
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name_en" id="name_en" value="{{old('name_en')}}" class="form-control"
                           placeholder="Name EN" required>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="description_am" class="form-label text-white">
                        Description AM
                    </label>
                    <textarea class="form-control" style="height:150px" name="description_am" id="description_am"
                              placeholder="Description AM">{{old('description_am')}}</textarea>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="description_ru" class="form-label text-white">
                        Description RU
                    </label>
                    <textarea class="form-control" style="height:150px" name="description_ru" id="description_ru"
                              placeholder="Description RU">{{old('description_ru')}}</textarea>
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="description_en" class="form-label text-white">
                        Description EN
                    </label>
                    <textarea class="form-control" style="height:150px" name="description_en" id="description_en"
                              placeholder="Description EN">{{old('description_en')}}</textarea>
                </div><div class="mb-3 col-12 col-md-6">
                    <label for="imageUpload" class="form-label text-white">
                        Upload Image
                        <span class="text-danger"> *</span>
                    </label>
                    <div class="border border-secondary rounded p-3 mb-3">
                        <div class="file-wrapper">
                            <input type="file" name="image" id="imageUpload" class="d-none"/>
                            <img src="{{ asset('images/No-Image.jpg') }}" id="imagePreview" width="200px"
                                 onclick="document.getElementById('imageUpload').click();"/>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>

    </div>

@endsection
