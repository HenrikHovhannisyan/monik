@php
    $statusText = match($checkout->status) {
        'pending' => __('notifications.status_pending', [], $locale),
        'completed' => __('notifications.status_completed', [], $locale),
        default => $checkout->status
    };
    $orderLink = config('app.url') . '/' . $locale . '/' . ltrim($checkout->link ?? 'order-items/' . $checkout->id, '/');
@endphp

<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="UTF-8">
    <title>{{ __('notifications.order_status_updated', [], $locale) }}</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 30px; margin: 0;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        
        <div style="background-color: #f4f4f4; padding: 20px; text-align: center;">
            <img src="{{ asset('images/logo.png') }}" alt="Monik Logo" style="height: 50px;">
        </div>

        <div style="padding: 30px;">
            <h2 style="color: #333333;">{{ __('notifications.hello', ['name' => $checkout->user->name], $locale) }}</h2>
            <p style="color: #555555; font-size: 16px;">
                {{ __('notifications.order_status_message', ['id' => $checkout->id, 'status' => $statusText], $locale) }}
            </p>
            <p style="color: #555555; font-size: 16px;">
                {{ __('notifications.thank_you', [], $locale) }}
            </p>

            <div style="margin-top: 30px; text-align: center;">
                <a href="{{ $orderLink }}" style="background-color: #ff6f61; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 5px; font-size: 16px;">
                    {{ __('notifications.view_order', [], $locale) }}
                </a>
            </div>
        </div>

        <div style="background-color: #f4f4f4; padding: 15px; text-align: center; font-size: 12px; color: #999;">
            &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('notifications.thank_you', [], $locale) }}
        </div>
    </div>
</body>
</html>
