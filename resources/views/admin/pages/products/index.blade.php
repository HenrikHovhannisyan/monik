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
                    <th scope="col">Code</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name AM</th>
                    <th scope="col">Name RU</th>
                    <th scope="col">Name EN</th>
                    <th width="280px">{{ 'Action' }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->code }}</td>
                        <td>
                            @foreach(json_decode($product->images) as $imagePath)
                                <img src="{{asset($imagePath)}}" width="55px">
                            @endforeach
                        </td>
                        <td>{{ $product->name_am }}</td>
                        <td>{{ $product->name_ru }}</td>
                        <td>{{ $product->name_en }}</td>
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
