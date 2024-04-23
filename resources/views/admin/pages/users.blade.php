@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <table class="table table-dark table-striped table-bordered table-responsive">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$user->name}}</td>
                    <td>@if($user->is_admin === 1) <span class="text-danger">Admin</span> @else User @endif</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
