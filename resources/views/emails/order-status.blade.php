@php
    $statusText = match($checkout->status) {
        'pending' => __('index.status_pending', [], $locale),
        'completed' => __('index.status_completed', [], $locale),
        default => $checkout->status
    };
@endphp

<h2>{{ __('index.hello', ['name' => $checkout->user->name], $locale) }}</h2>
<p>
    {{ __('index.order_status_message', ['id' => $checkout->id, 'status' => $statusText], $locale) }}
</p>
<p>{{ __('index.thank_you', [], $locale) }}</p>