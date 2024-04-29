@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Categories List' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Categories List</h2>
            <a class="btn btn-success" href="{{ route('categories.create') }}">
                <i class="fa-solid fa-plus"></i>
                New Category
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name AM</th>
                    <th scope="col">Name RU</th>
                    <th scope="col">Name EN</th>
                    <th width="280px">{{ 'Action' }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>
                            <img style="height: 55px" src="{{ asset( $category->image ) }}" alt="">
                        </td>
                        <td>{{ $category->name_am }}</td>
                        <td>{{ $category->name_ru }}</td>
                        <td>{{ $category->name_en }}</td>
                        <td>
                            <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                <a class="btn btn-outline-success btn-sm m-1"
                                   href="{{ route('categories.show',$category->id) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm m-1"
                                   href="{{ route('categories.edit',$category->id) }}">
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
