@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Products List' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Products List</h2>
            <a class="btn btn-success" href="{{ route('products.create') }}">
                <i class="fa-solid fa-plus"></i>
                New Product
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="min-width: 100px;">Code</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Name EN</th>
                    <th scope="col" style="min-width: 155px;">Price</th>
                    <th scope="col" style="min-width: 160px;">Sizes</th>
                    <th width="280px">{{ 'Action' }}</th>
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
                        <td>{{ $product->name_en }}</td>
                        <td>
                            <span class="d-block text-success">Price - {{ $product->price }}֏</span>
                            @if($product->discount)
                                <span class="d-block text-warning">Discount - {{ $product->discount }}%</span>
                                <span class="d-block text-info">
                                    Final price -
                                    {{ $product->price - ($product->price * $product->discount) / 100 }}֏
                                </span>
                            @endif
                        </td>
                        <td>
                            @php
                                $sizes = json_decode($product->size, true); // Decode the 'size' JSON field
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
                            <b>Total quantity - {{ $product->quantity }}</b>
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
        {!! $products->links('vendor.pagination.bootstrap-4') !!}
    </div>

@endsection
