@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Show Category' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Show Category</h2>
            <a class="btn btn-success" href="{{ route('categories.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Back
            </a>
        </div>
        <section class="content">
            <div class="card col-12 col-md-6 mx-auto">
                <div class="card-body p-2">
                    <ul>
                        <li class="mb-2">
                            <strong>Name AM :</strong>
                            <span class="text-white">
                                {{ $category->name_am }}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Name RU :</strong>
                            <span class="text-white">
                                {{ $category->name_ru }}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Name EN :</strong>
                            <span class="text-white">
                                {{ $category->name_en }}
                            </span>
                        </li>
                        @if($category->description_am)
                            <li class="mb-2">
                                <strong>Description AM :</strong>
                                <span class="text-white">
                                    {{ $category->description_am }}
                                </span>
                            </li>
                        @endif
                        @if($category->description_ru)
                            <li class="mb-2">
                                <strong>Description RU :</strong>
                                <span class="text-white">
                                    {{ $category->description_ru }}
                                </span>
                            </li>
                        @endif
                        @if($category->description_en)
                            <li class="mb-2">
                                <strong>Description EN :</strong>
                                <span class="text-white">
                                    {{ $category->description_en }}
                                </span>
                            </li>
                        @endif
                        <li class="mb-2">
                            <strong>Image :</strong>
                            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#viewImageModal">
                                View image
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <!-- View image modal -->
    <div class="modal fade" id="viewImageModal" tabindex="-1" aria-hidden="true" data-bs-theme="dark">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View image</h5>
                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="img-fluid" src="{{ asset( $category->image ) }}" alt="Image">
                </div>
            </div>
        </div>
    </div>
@endsection

