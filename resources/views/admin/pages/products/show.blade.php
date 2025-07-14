@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Показать продукт' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Показать продукт</h2>
            <a class="btn btn-success" href="{{ route('products.index') }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Назад
            </a>
        </div>
        <section class="content">
            <div class="card col-12 col-md-10">
                <div class="card-body p-2">
                    <table class="table table-dark table-striped table-bordered table-responsive">
                        @if($metadata)
                            @if($metadata->primary_price)
                                <tr>
                                    <th>Первичная цена</th>
                                    <td class="text-white">
                                        {{ $metadata->primary_price }}
                                    </td>
                                </tr>
                            @endif
                            @if($metadata->product_link)
                                <tr>
                                    <th>Ссылка на продукт</th>
                                    <td class="text-white">
                                        <a href="{{ $metadata->product_link }}" target="_blank">
                                            {{ $metadata->product_link }}
                                        </a>
                                    </td>
                                </tr>
                            @endif
                        @endif
                        <tr>
                            <th>Код</th>
                            <td class="text-white">
                                {{ $product->code }}
                            </td>
                        </tr>
                        <tr>
                            <th>Количество</th>
                            <td class="text-white">
                                {{ $product->quantity }}
                            </td>
                        </tr>
                        <tr>
                            <th>Размеры</th>
                            <td class="text-white">
                                @foreach($size as $sizeName => $item)
                                    @if( $item['quantity'])
                                        <span class="d-inline-flex px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2">
                                            ({{ $sizeName }}) - {{ $item['quantity'] }}
                                        </span>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Категория</th>
                            <td class="text-white">
                                {{ $product->category->name_ru }}
                            </td>
                        </tr>
                        <tr>
                            <th>Статус</th>
                            <td class="text-white">
                                @if($status)
                                    @foreach($status as $key => $value)
                                        {{ $value }}
                                        @if(!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                @else
                                    Статус не доступен
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Цена</th>
                            <td class="text-white">
                                {{ $product->price }}֏
                            </td>
                        </tr>
                        @if($product->discount)
                            <tr>
                                <th>Скидка</th>
                                <td class="text-white">
                                    {{ $product->discount }}%
                                </td>
                            </tr>
                            <tr>
                                <th>Итоговая цена</th>
                                <td class="text-white">
                                    {{ $product->price - ($product->price * $product->discount) / 100 }}֏
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <th>Название HY</th>
                            <td class="text-white">
                                {{ $product->name_hy }}
                            </td>
                        </tr>
                        <tr>
                            <th>Название RU</th>
                            <td class="text-white">
                                {{ $product->name_ru }}
                            </td>
                        </tr>
                        <tr>
                            <th>Название EN</th>
                            <td class="text-white">
                                {{ $product->name_en }}
                            </td>
                        </tr>
                        <tr>
                            <th>Описание HY</th>
                            <td class="text-white">
                                {!! html_entity_decode($product->description_hy) !!}
                            </td>
                        </tr>
                        <tr>
                            <th>Описание RU</th>
                            <td class="text-white">
                                {!! html_entity_decode($product->description_ru) !!}
                            </td>
                        </tr>
                        <tr>
                            <th>Описание EN</th>
                            <td class="text-white">
                                {!! html_entity_decode($product->description_en) !!}
                            </td>
                        </tr>
                        @if($product->color)
                            <tr>
                                <th>Цвет</th>
                                <td class="text-white">
                                    {{ $product->color }}
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <th>Пол</th>
                            <td class="text-white">
                                @foreach($gender as $key => $value)
                                    {{ $value }}
                                    @if(!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Изображение</th>
                            <td>
                                @foreach(json_decode($product->images) as $imagePath)
                                    <img src="{{asset($imagePath)}}" width="200" class="m-1 img-fluid">
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
