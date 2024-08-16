@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Checkouts List' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Checkouts List</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Sum</th>
                    <th scope="col">Address</th>
                    <th width="80px">{{ 'Action' }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($checkouts as $checkout)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $checkout->created_at->format('Y-m-d') }}</td>
                        <td>
                            @if($checkout->status === 'processing')
                                <span class="text-primary">Processing</span>
                            @elseif($checkout->status === 'pending')
                                <span class="text-warning">Pending</span>
                            @elseif($checkout->status === 'completed')
                                <span class="text-success">Completed</span>
                            @else
                                <span class="text-danger">Cancel</span>
                            @endif
                        </td>
                        <td>{{ floor($checkout->total_price) }}֏</td>
                        <td>
                            <p class="text-capitalize">
                                {{ $checkout->shippingAddress->city }},
                                {{ $checkout->shippingAddress->state }},
                                {{ $checkout->shippingAddress->address }},
                                @if($checkout->shippingAddress->address2)
                                    {{ $checkout->shippingAddress->address2 }},
                                @endif
                                {{ $checkout->shippingAddress->postcode }}
                            </p>
                        </td>
                        <td>
                            <a class="btn btn-outline-success btn-sm m-1"
                               href="{{ route('checkouts.show',$checkout->id) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! $checkouts->links('vendor.pagination.bootstrap-4') !!}
    </div>
@endsection
