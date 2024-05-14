@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1 class="">
                            {{ __('index.welcome') }}
                        </h1>
                        {{--@foreach($product as $i)
                            <p class="">{{ $i->{lang('name')} }}</p>
                        @endforeach--}}
                        @if(Auth::user() && Auth::user()->is_admin === 1)
                            <hr>
                            <a href="{{ route('dashboard') }}" class="btn btn-success">Dashboard</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
