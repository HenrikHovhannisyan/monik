<?php

namespace App\Mail;

use App\Models\Checkout;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlacedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $checkout;

    public function __construct(Checkout $checkout, $locale)
    {
        $this->checkout = $checkout;
        $this->locale = $locale;
    }

    public function build()
    {
        app()->setLocale($this->locale);

        return $this->subject(__('messages.notifications_order_completed'))
            ->view('emails.order_placed');
    }
}
