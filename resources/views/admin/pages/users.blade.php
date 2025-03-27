@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Список пользователей' }}
@endsection

@section('content')
    <div class="container-fluid p-0">
        <h2 class="text-white mb-3">Список пользователей</h2>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Должность</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $index => $user)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{$user->name}}</td>
                        <td>@if($user->is_admin === 1) <span class="text-danger">Админ</span> @else Пользователь @endif</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
