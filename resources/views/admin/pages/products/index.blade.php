@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Список продуктов' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Список продуктов</h2>
            <a class="btn btn-success" href="{{ route('products.create') }}">
                <i class="fa-solid fa-plus"></i>
                Новый продукт
            </a>
        </div>
        <div class="table-responsive">
            <table id="products-table" class="table table-dark table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="min-width: 100px;">Код</th>
                    <th scope="col">Изображение</th>
                    <th scope="col">Категория</th>
                    <th scope="col">Название EN</th>
                    <th scope="col" style="min-width: 155px;">Цена</th>
                    <th scope="col" style="min-width: 160px;">Размеры</th>
                    <th width="280px">{{ 'Действие' }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->code }}</td>
                        <td>
                            <img src="{{ asset(json_decode($product->images)[0]) }}" width="55px">
                        </td>
                        <td>{{ $product->category->name_ru }}</td>
                        <td>{{ $product->name_ru }}</td>
                        <td>
                            <span class="d-block text-success">Цена - {{ $product->price }}֏</span>
                            @if($product->discount)
                                <span class="d-block text-warning">Скидка - {{ $product->discount }}%</span>
                                <span class="d-block text-info">
                                    Конечная цена -
                                    {{ $product->price - ($product->price * $product->discount) / 100 }}֏
                                </span>
                            @endif
                        </td>
                        <td>
                            @php
                                $sizes = json_decode($product->size, true); // Декодируем поле 'size' в JSON
                            @endphp
                            @if(is_array($sizes))
                                @foreach($sizes as $sizeName => $item)
                                    @if(!is_null($item['quantity']))
                                        <p class="mb-0">
                                            ({{ $sizeName }}) - {{ $item['quantity'] }}
                                        </p>
                                    @endif
                                @endforeach
                            @endif
                            <b>Общее количество - {{ $product->quantity }}</b>
                        </td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                <a class="btn btn-outline-success btn-sm m-1"
                                   href="{{ route('products.show',$product->id) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm m-1"
                                   href="{{ route('products.edit',$product->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm m-1">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
