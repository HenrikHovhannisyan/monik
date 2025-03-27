@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Редактировать продукт' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Редактировать продукт</h2>
            <a class="btn btn-success" href="{{ route('products.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Назад
            </a>
        </div>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
              data-bs-theme="dark">
            @csrf
            @method('PUT')
            <hr class="text-white">
            <div class="row">
                <h3 class="text-white">Метаданные продукта</h3>
                <div class="mb-3 col-12 col-lg-6">
                    <div class="form-group">
                        <label for="primary_price" class="form-label text-white">Первичная цена</label>
                        <input type="number" name="primary_price" id="primary_price" class="form-control"
                               value="{{ old('primary_price', $metadata->primary_price ?? '') }}">
                    </div>
                </div>
                <div class="mb-3 col-12 col-lg-6">
                    <div class="form-group">
                        <label for="product_link" class="form-label text-white">Ссылка на продукт</label>
                        <input type="text" name="product_link" id="product_link" class="form-control"
                               value="{{ old('product_link', $metadata->product_link ?? '') }}">
                    </div>
                </div>
            </div>
            <hr class="text-white">
            <div class="row">
                <h3 class="text-white">Информация о продукте</h3>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="name_am" class="form-label text-white">
                        Название AM
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name_am" id="name_am" value="{{$product->name_am}}" class="form-control"
                           placeholder="Название AM" required>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="name_ru" class="form-label text-white">
                        Название RU
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name_ru" id="name_ru" value="{{$product->name_ru}}" class="form-control"
                           placeholder="Название RU" required>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="name_en" class="form-label text-white">
                        Название EN
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name_en" id="name_en" value="{{$product->name_en}}" class="form-control"
                           placeholder="Название EN" required>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="description_am" class="form-label text-white">
                        Описание AM
                        <span class="text-danger"> *</span>
                    </label>
                    <textarea class="form-control" style="height:150px" name="description_am" id="description_am"
                              placeholder="Описание AM">{{$product->description_am}}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="description_ru" class="form-label text-white">
                        Описание RU
                        <span class="text-danger"> *</span>
                    </label>
                    <textarea class="form-control" style="height:150px" name="description_ru" id="description_ru"
                              placeholder="Описание RU">{{$product->description_ru}}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="description_en" class="form-label text-white">
                        Описание EN
                        <span class="text-danger"> *</span>
                    </label>
                    <textarea class="form-control" style="height:150px" name="description_en" id="description_en"
                              placeholder="Описание EN">{{$product->description_en}}</textarea>
                </div>
                <div class="mb-3 col-12">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="price" class="form-label text-white">
                                Цена:
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" name="price" id="price" value="{{ $product->price }}"
                                   class="form-control" placeholder="Цена" min="0" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="discount_percent" class="form-label text-white">Процент скидки:</label>
                            <input type="number" name="discount" id="discount_percent" value="{{ $product->discount }}"
                                   class="form-control" min="0" placeholder="Процент скидки">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="discount" class="form-label text-white">Цена со скидкой:</label>
                            <input type="number" id="discount" class="form-control" value="{{$discount}}"
                                   placeholder="Цена со скидкой" disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="category_id" class="form-label text-white">
                        Категория:
                        <span class="text-danger">*</span>
                    </label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                    @if($product->category_id == $category->id) selected @endif>
                                {{ $category->name_ru }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label class="form-label text-white">
                        Размеры:
                        <span class="text-danger">*</span>
                    </label>
                    <div id="sizes-container" class="d-flex">
                        @foreach($availableSizes as $size)
                            <div class="d-grid size-group">
                                <label for="size-{{ $size }}" class="form-check-label text-white">{{ $size }}</label>
                                <input type="number" id="size-{{ $size }}" name="size[{{ $size }}][quantity]"
                                       class="form-control" placeholder="Количество"
                                       min="0"
                                       value="{{ isset($selectedSizes[$size]['quantity']) ? $selectedSizes[$size]['quantity'] : '' }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <label class="form-label text-white">
                                Пол:
                                <span class="text-danger">*</span>
                            </label>
                            <div class="d-flex">
                                @foreach($availableGender as $gender)
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" name="gender[]"
                                               value="{{ $gender }}"
                                               id="{{ $gender }}"
                                            {{ in_array($gender, $selectedGender) ? 'checked' : '' }}>
                                        <label class="form-check-label text-white"
                                               for="{{ $gender }}">{{ $gender }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label class="form-label text-white">
                                Статус:
                            </label>
                            <div class="d-flex">
                                @foreach($availableStatus as $status)
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" name="status[]"
                                               value="{{ $status }}"
                                               id="{{ $status }}"
                                               @if(is_array($selectedStatus) && in_array($status, $selectedStatus))
                                               checked
                                            @endif>
                                        <label class="form-check-label text-white"
                                               for="{{ $status }}">{{ $status }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="color" class="form-label text-white">
                        Цвет:
                    </label>
                    <input type="text" name="color" id="color" value="{{ $product->color }}" class="form-control"
                           placeholder="Цвет">
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="images" class="form-label text-white">
                        Изображения:
                        <span class="text-danger">*</span>
                    </label>
                    @foreach(json_decode($product->images) as $imagePath)
                        <img src="{{asset($imagePath)}}" width="100px" class="m-1">
                    @endforeach
                    <input type="file" name="images[]" class="form-control" id="images" placeholder="Изображения" multiple>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fa-solid fa-pen-to-square"></i>
                Обновить
            </button>
        </form>
    </div>

@endsection
