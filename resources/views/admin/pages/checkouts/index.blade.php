@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Список заказов' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Список заказов</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Сумма</th>
                    <th scope="col">Адрес</th>
                    <th width="80px">{{ 'Действие' }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($checkouts as $checkout)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $checkout->created_at->format('Y-m-d') }}</td>
                        <td>
                            @if($checkout->status === 'processing')
                                <span class="text-primary">В обработке</span>
                            @elseif($checkout->status === 'pending')
                                <span class="text-warning">В доставке</span>
                            @elseif($checkout->status === 'completed')
                                <span class="text-success">Завершено</span>
                            @else
                                <span class="text-danger">Отменено</span>
                            @endif
                        </td>
                        <td>{{ floor($checkout->total_price) }}֏</td>
                        <td>
                            <p class="text-capitalize">
                                @if($checkout->shippingAddress)
                                    {{ $checkout->shippingAddress->city }},
                                    {{ $checkout->shippingAddress->region }},
                                    {{ $checkout->shippingAddress->street }},
                                    {{ $checkout->shippingAddress->house_number }},
                                    @if($checkout->shippingAddress->postcode)
                                        {{ $checkout->shippingAddress->postcode }}
                                    @endif
                                @else
                                    <span>{{ __('index.no_shipping_address') }}</span>
                                @endif
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
