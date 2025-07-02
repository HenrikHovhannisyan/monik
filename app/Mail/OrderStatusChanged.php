<?php

namespace App\Mail;

use App\Models\Checkout;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderStatusChanged extends Mailable
{
    use Queueable, SerializesModels;

    public $checkout;
    public $locale;

    public function __construct(Checkout $checkout, $locale)
    {
        $this->checkout = $checkout;
        $this->locale = $locale;
    }

    public function build()
    {
        app()->setLocale($this->locale);

        return $this->subject(__('notifications.order_status_updated'))
            ->view('emails.order-status')
            ->with(['checkout' => $this->checkout]);
    }
}
