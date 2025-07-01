<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ __('index.notifications_order_completed') }}</title>
</head>
<body>
    <h1>{{ __('index.hello', ['name' => $checkout->user->name]) }}</h1>
    <p>{{ __('index.notifications_order_completed_message') }}</p>
    <p>{{ __('index.order_number') }}: {{ $checkout->id }}</p>
    <p>{{ __('index.total') }}: {{ $checkout->total_price }} ֏</p>
    <p>{{ __('index.thank_you') }}</p>
</body>
</html>
