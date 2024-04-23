@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 card">
                <div class="text-center text-white">
                    <i class="fa-solid fa-users fa-5x"></i>
                </div>
                <div class="d-flex justify-content-between align-items-start mt-3">
                    <h3 class="m-0">Users - {{ $usersCount }}</h3>
                    <a href="#" class="btn">
                        View
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
