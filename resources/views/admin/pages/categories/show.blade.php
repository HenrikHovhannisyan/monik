@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Показать категорию' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Показать категорию</h2>
            <a class="btn btn-success" href="{{ route('categories.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Назад
            </a>
        </div>
        <section class="content">
            <div class="card col-12 col-md-10">
                <div class="card-body p-2">
                    <ul>
                        <li class="mb-2">
                            <strong>Название HY :</strong>
                            <span class="text-white">
                                {{ $category->name_hy }}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Название RU :</strong>
                            <span class="text-white">
                                {{ $category->name_ru }}
                            </span>
                        </li>
                        <li class="mb-2">
                            <strong>Название EN :</strong>
                            <span class="text-white">
                                {{ $category->name_en }}
                            </span>
                        </li>
                        @if($category->description_hy)
                            <hr class="text-white">
                            <li class="mb-2">
                                <strong>Описание HY :</strong>
                                <span class="text-white">
                                    {!! html_entity_decode($category->description_hy) !!}
                                </span>
                            </li>
                        @endif
                        @if($category->description_ru)
                            <li class="mb-2">
                                <strong>Описание RU :</strong>
                                <span class="text-white">
                                    {!! html_entity_decode($category->description_ru) !!}
                                </span>
                            </li>
                        @endif
                        @if($category->description_en)
                            <li class="mb-2">
                                <strong>Описание EN :</strong>
                                <span class="text-white">
                                    {!! html_entity_decode($category->description_en) !!}
                                </span>
                            </li>
                        @endif
                        <hr class="text-white">
                        <li class="mb-2">
                            <strong>Изображение :</strong>
                            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#viewImageModal">
                                Посмотрет
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <!-- Модальное окно для просмотра изображения -->
    <div class="modal fade" id="viewImageModal" tabindex="-1" aria-hidden="true" data-bs-theme="dark">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Просмотр изображения</h5>
                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img class="img-fluid" src="{{ asset( $category->image ) }}" alt="Изображение">
                </div>
            </div>
        </div>
    </div>
@endsection
