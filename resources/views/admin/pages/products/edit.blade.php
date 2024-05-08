@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Edit Product' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Edit Product</h2>
            <a class="btn btn-success" href="{{ route('products.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Back
            </a>
        </div>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
              data-bs-theme="dark">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="mb-3 col-12 col-lg-4">
                    <label for="name_am" class="form-label text-white">
                        Name AM
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name_am" id="name_am" value="{{$product->name_am}}" class="form-control"
                           placeholder="Name AM" required>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="name_ru" class="form-label text-white">
                        Name RU
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name_ru" id="name_ru" value="{{$product->name_ru}}" class="form-control"
                           placeholder="Name RU" required>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="name_en" class="form-label text-white">
                        Name EN
                        <span class="text-danger"> *</span>
                    </label>
                    <input type="text" name="name_en" id="name_en" value="{{$product->name_en}}" class="form-control"
                           placeholder="Name EN" required>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="description_am" class="form-label text-white">
                        Description AM
                        <span class="text-danger"> *</span>
                    </label>
                    <textarea class="form-control" style="height:150px" name="description_am" id="description_am"
                              placeholder="Description AM">{{$product->description_am}}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="description_ru" class="form-label text-white">
                        Description RU
                        <span class="text-danger"> *</span>
                    </label>
                    <textarea class="form-control" style="height:150px" name="description_ru" id="description_ru"
                              placeholder="Description RU">{{$product->description_ru}}</textarea>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="description_en" class="form-label text-white">
                        Description EN
                        <span class="text-danger"> *</span>
                    </label>
                    <textarea class="form-control" style="height:150px" name="description_en" id="description_en"
                              placeholder="Description EN">{{$product->description_en}}</textarea>
                </div>
                <div class="mb-3 col-12">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="price" class="form-label text-white">
                                Price:
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" name="price" id="price" value="{{ $product->price }}"
                                   class="form-control" placeholder="Price" min="0" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="discount_percent" class="form-label text-white">Discount Percent:</label>
                            <input type="number" name="discount" id="discount_percent" value="{{ $product->discount }}"
                                   class="form-control" min="0" placeholder="Discount Percent">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="discount" class="form-label text-white">Discount Price:</label>
                            <input type="number" id="discount" class="form-control" value="{{$discount}}"
                                   placeholder="Discount Price" disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="category_id" class="form-label text-white">
                        Category:
                        <span class="text-danger">*</span>
                    </label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                    @if($product->category_id == $category->id) selected @endif>
                                {{ $category->name_en }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label class="form-label text-white">
                        Size:
                        <span class="text-danger">*</span>
                    </label>
                    <div class="d-flex">
                        @foreach($availableSizes as $size)
                            <div class="form-check me-3">
                                <input class="form-check-input" type="checkbox" name="size[]" value="{{ $size }}"
                                       id="{{ $size }}"
                                    {{ in_array($size, $selectedSizes) ? 'checked' : '' }}>
                                <label class="form-check-label text-white" for="{{ $size }}">{{ $size }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <label class="form-label text-white">
                                Gender:
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
                                Status:
                            </label>
                            <div class="d-flex">
                                @foreach($availableStatus as $status)
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="checkbox" name="status[]"
                                               value="{{ $status }}"
                                               id="{{ $status }}"
                                            {{ in_array($status, $selectedStatus) ? 'checked' : '' }}>
                                        <label class="form-check-label text-white"
                                               for="{{ $status }}">{{ $status }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="quantity" class="form-label text-white">
                        Quantity:
                        <span class="text-danger">*</span>
                    </label>
                    <input type="number" name="quantity" id="quantity" value="{{ $product->quantity }}"
                           class="form-control" placeholder="Quantity" min="0"
                           required>
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="color" class="form-label text-white">
                        Color:
                    </label>
                    <input type="text" name="color" id="color" value="{{ $product->color }}" class="form-control"
                           placeholder="Color">
                </div>
                <div class="mb-3 col-12 col-lg-4">
                    <label for="images" class="form-label text-white">
                        Images:
                        <span class="text-danger">*</span>
                    </label>
                    @foreach(json_decode($product->images) as $imagePath)
                        <img src="{{asset($imagePath)}}" width="100px" class="m-1">
                    @endforeach
                    <input type="file" name="images[]" class="form-control" id="images" placeholder="image" multiple>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fa-solid fa-pen-to-square"></i>
                Update
            </button>
        </form>
    </div>

@endsection
