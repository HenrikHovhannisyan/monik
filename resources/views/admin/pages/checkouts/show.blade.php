@extends('admin.layouts.app')

@section('title')
    @parent | {{ 'Просмотр оформления заказа' }}
@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="d-flex align-items-center gap-3 mb-3">
            <h2 class="text-white">Просмотр оформления заказа</h2>
            <a class="btn btn-success" href="{{ url()->previous() }}">
                <i class="fa-solid fa-arrow-left-long"></i>
                Назад
            </a>
        </div>
        <section class="content">
            <div class="card col-12 col-md-10">
                <div class="card-body p-2 text-white">
                    <div class="row">
                        <div class="col-xl-4 mb-3 order_summary">
                            <h3>Детали заказа</h3>
                            <p>
                                <strong>Номер заказа:</strong>
                                {{ $checkout->id }}
                            </p>
                            <p>
                                <strong>Дата заказа:</strong>
                                {{ $checkout->created_at->format('Y-m-d') }}
                            </p>
                            <p>
                                <strong>Корзина:</strong>
                                {{ $checkout->cart_price }}֏
                            </p>
                            <p>
                                <strong>Доставка:</strong>
                                {{ floor($checkout->shipping_cost) }}֏ <span class="text-capitalize">({{ $checkout->shipping_option }})</span>
                            </p>
                            <p>
                                <strong>Итого:</strong>
                                {{ $checkout->total_price }}֏
                            </p>
                            <p class="text-capitalize">
                                <strong>Статус:</strong>
                                @if($checkout->status === 'processing')
                                    <span class="text-primary">В обработке</span>
                                @elseif($checkout->status === 'pending')
                                    <span class="text-warning">В доставке</span>
                                @elseif($checkout->status === 'completed')
                                    <span class="text-success">Завершён</span>
                                @else
                                    <span class="text-danger">Отменён</span>
                                @endif
                            </p>
                        </div>
                        <div class="col-xl-4 mb-3 order_shipping">
                            <h3>Детали доставки</h3>
                            @if($checkout->shippingAddress)
                                <p class="text-capitalize">
                                    <strong>Город:</strong>
                                    {{ $checkout->shippingAddress->city }}
                                </p>
                                <p class="text-capitalize">
                                    <strong>Регион:</strong>
                                    {{ $checkout->shippingAddress->region }}
                                </p>
                                <p class="text-capitalize">
                                    <strong>Улица:</strong>
                                    {{ $checkout->shippingAddress->street }}
                                </p>
                                <p class="text-capitalize">
                                    <strong>Дом:</strong>
                                    {{ $checkout->shippingAddress->house_number }}
                                </p>
                                @if($checkout->shippingAddress->postcode)
                                    <p class="text-capitalize">
                                        <strong>Почтовый индекс:</strong>
                                        {{ $checkout->shippingAddress->postcode }}
                                    </p>
                                @endif
                                @if($checkout->shippingAddress->address)
                                    <p class="text-capitalize">
                                        <strong>Адрес:</strong>
                                        {{ $checkout->shippingAddress->address }}
                                    </p>
                                @endif
                                @if($checkout->order_notes)
                                    <p class="text-capitalize">
                                        <strong>Комментарий к заказу:</strong>
                                        {{ $checkout->order_notes }}
                                    </p>
                                @endif

                                @if($checkout->shippingAddress->address)
                                    <a href="https://yandex.ru/maps/?text={{ urlencode($checkout->shippingAddress->address) }}"
                                       class="btn btn-danger text-bg-danger" target="_blank">
                                        <i class="fa-solid fa-location-dot fa-beat"></i>
                                        Открыть в Яндекс.Картах
                                    </a>
                                @else
                                    <a href="https://yandex.ru/maps/?text={{ urlencode($checkout->shippingAddress->city) }}, {{ urlencode($checkout->shippingAddress->region) }}, {{ urlencode($checkout->shippingAddress->street) }}, {{ urlencode($checkout->shippingAddress->house_number) }}"
                                       class="btn btn-danger text-bg-danger" target="_blank">
                                        <i class="fa-solid fa-location-dot fa-beat"></i>
                                        Открыть в Яндекс.Картах
                                    </a>
                                @endif
                            @else
                                <p>{{ __('index.no_shipping_address') }}</p>
                            @endif
                        </div>
                        <div class="col-xl-4 mb-3 customer_info">
                            <span>
                                <h3>Детали клиента</h3>
                                <p><strong>Имя:</strong> {{ $checkout->user->name }}</p>
                                <p>
                                    <strong>Email:</strong>
                                    <a href="mailto:{{ $checkout->user->email }}">
                                        {{ $checkout->user->email }}
                                    </a>
                                </p>
                                <p><strong>Телефоны:</strong></p>
                                <ul>
                                    @if($checkout->user->account && $checkout->user->account->phones->isNotEmpty())
                                        @foreach($checkout->user->account->phones as $phone)
                                            <li>
                                                <a href="tel:{{ $phone->phone_number }}">
                                                    {{ $phone->phone_number }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li>Нет номеров телефона</li>
                                    @endif
                                </ul>
                            </span>
                            <div class="order_payment">
                                <h3>Детали оплаты</h3>
                                <p class="text-capitalize">
                                    <strong>Метод оплаты:</strong>
                                    {{ $checkout->payment_option }}
                                </p>
                            </div>
                            @if($checkout->promocode)
                                <div class="promocode">
                                    <h3>Детали промокода:</h3>
                                    <p class="text-capitalize">
                                        <strong>Промокод:</strong> {{ $checkout->promocode->code }}
                                    </p>
                                    <p>
                                        <strong>Скидка:</strong> {{ $checkout->promocode->discount }}%
                                    </p>
                                    <p>
                                        <strong>Тип:</strong>
                                        {{ $checkout->promocode->type === 'one-time' ? 'Одноразовый' : 'Многоразовый' }}
                                    </p>
                                </div>
                            @endif
                        </div>
                        <hr>
                        <div class="col-12 order_items">
                            <h3>Товары</h3>
                            <div class="table-responsive">
                                <table class="table table-dark table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Изображение</th>
                                        <th>Товар</th>
                                        <th>Размер</th>
                                        <th>Количество</th>
                                        <th>Цена</th>
                                        <th>Итого</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($checkout->orderItems as $item)
                                        <tr>
                                            <td>
                                                <a href="{{ route('product', $item->product->slug) }}">
                                                    <img src="{{ asset(json_decode($item->product->images)[0]) }}"
                                                         width="100" alt="{{ $item->product->{lang('name')} }}">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('product', $item->product->slug) }}">
                                                    {{ $item->product->name_ru }}
                                                </a>
                                            </td>
                                            <td>{{ $item->size }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>
                                                {{ floor($item->price) }}֏
                                            </td>
                                            <td>{{ $item->quantity * $item->price }}֏</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
