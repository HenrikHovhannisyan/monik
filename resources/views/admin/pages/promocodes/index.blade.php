@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Promocodes List' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Promocodes List</h2>
            <a class="btn btn-success" href="{{ route('promocodes.create') }}">
                <i class="fa-solid fa-plus"></i>
                New Promocode
            </a>
        </div>
        <div class="table-responsive">
            <table id="promocodes-table" class="table table-dark table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Code</th>
                    <th scope="col">Discount (%)</th>
                    <th scope="col">Type</th>
                    <th scope="col">Status</th>
                    <th scope="col">Expiry Date</th>
                    <th width="280px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($promocodes as $index => $promocode)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $promocode->code }}</td>
                        <td>{{ $promocode->discount }}%</td>
                        <td>{{ $promocode->type === 'one-time' ? 'Одноразовый' : 'Многоразовый' }}</td>
                        <td>{{ $promocode->status === 'active' ? 'Активен' : 'Неактивен' }}</td>
                        <td>{{ $promocode->expiry_date ? \Carbon\Carbon::parse($promocode->expiry_date)->format('d.m.Y') : '—' }}</td>
                        <td>
                            <form action="{{ route('promocodes.destroy', $promocode->id) }}" method="POST">
                                <a class="btn btn-outline-primary btn-sm m-1" href="{{ route('promocodes.edit', $promocode->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm m-1" onclick="return confirm('Вы уверены?')">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! $promocodes->links('vendor.pagination.bootstrap-4') !!}
    </div>

@endsection