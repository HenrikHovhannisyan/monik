@php
    $locale = $locale ?? app()->getLocale();
    $orderLink = config('app.url') . '/' . $locale . '/' . ltrim($checkout->link ?? 'order-items/' . $checkout->id, '/');
@endphp

<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="UTF-8">
    <title>{{ __('notifications.order_completed', [], $locale) }}</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 30px; margin: 0;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">

        {{-- Header / Logo --}}
        <div style="background-color: #f4f4f4; padding: 20px; text-align: center;">
            <img src="{{ config('app.url') }}/images/logo.png" alt="{{ config('app.name') }} Logo" style="height: 50px;">
        </div>

        {{-- Body --}}
        <div style="padding: 30px;">
            <h2 style="color: #333333;">{{ __('notifications.hello', ['name' => $checkout->user->name], $locale) }}</h2>

            <p style="color: #555555; font-size: 16px;">
                {{ __('notifications.order_completed_message', ['id' => $checkout->id], $locale) }}
            </p>

            <div style="background-color: #f0f4f8; padding: 15px 20px; border-radius: 6px; margin: 20px 0; text-align: center; font-weight: 600; color: #333;">
                <p>{{ __('index.order_number', [], $locale) }}: #{{ $checkout->id }}</p>
                <p>{{ __('index.total', [], $locale) }}: {{ number_format($checkout->total_price, 0, ',', ' ') }} ֏</p>
            </div>

            <p style="color: #555555; font-size: 16px;">
                {{ __('notifications.thank_you', [], $locale) }}
            </p>

            {{-- Button --}}
            <div style="margin-top: 30px; text-align: center;">
                <a href="{{ $orderLink }}" style="background-color: #ff6f61; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 5px; font-size: 16px;">
                    {{ __('notifications.view_order', [], $locale) }}
                </a>
            </div>
        </div>

        {{-- Footer --}}
        <div style="background-color: #f4f4f4; padding: 15px; text-align: center; font-size: 12px; color: #999;">
            &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('notifications.thank_you', [], $locale) }}
        </div>
    </div>
</body>
</html>
