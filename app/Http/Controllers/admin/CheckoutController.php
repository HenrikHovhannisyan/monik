<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Mail\OrderStatusChanged;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\App;

class CheckoutController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::latest()->paginate(10);
        return view('admin.pages.checkouts.index', compact('checkouts'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function show(Checkout $checkout)
    {
        $checkout->load('user.account.phones');
        return view('admin.pages.checkouts.show', compact('checkout'));
    }

    public function changeStatusPending(Request $request, Checkout $checkout)
    {
        $checkout->update(['status' => 'pending']);

        Mail::to($checkout->user->email)->send(new OrderStatusChanged($checkout, App::getLocale()));

        Notification::create([
            'user_id' => $checkout->user_id,
            'title_am' => Lang::get('notifications.order_status_updated', [], 'am'),
            'title_ru' => Lang::get('notifications.order_status_updated', [], 'ru'),
            'title_en' => Lang::get('notifications.order_status_updated', [], 'en'),
            'message_am' => Lang::get('notifications.order_status_message', ['id' => $checkout->id, 'status' => Lang::get('notifications.status_pending', [], 'am')], 'am'),
            'message_ru' => Lang::get('notifications.order_status_message', ['id' => $checkout->id, 'status' => Lang::get('notifications.status_pending', [], 'ru')], 'ru'),
            'message_en' => Lang::get('notifications.order_status_message', ['id' => $checkout->id, 'status' => Lang::get('notifications.status_pending', [], 'en')], 'en'),
            'link' => relative_route('order-items.show', $checkout->id),
        ]);

        return redirect()->back()->with('success', 'Checkout status updated and user notified.');
    }

    public function changeStatusCompleted(Request $request, Checkout $checkout)
    {
        $checkout->update(['status' => 'completed']);

        Mail::to($checkout->user->email)->send(new OrderStatusChanged($checkout, App::getLocale()));

        Notification::create([
            'user_id' => $checkout->user_id,
            'title_am' => Lang::get('notifications.order_status_updated', [], 'am'),
            'title_ru' => Lang::get('notifications.order_status_updated', [], 'ru'),
            'title_en' => Lang::get('notifications.order_status_updated', [], 'en'),
            'message_am' => Lang::get('notifications.order_status_message', ['id' => $checkout->id, 'status' => Lang::get('notifications.status_completed', [], 'am')], 'am'),
            'message_ru' => Lang::get('notifications.order_status_message', ['id' => $checkout->id, 'status' => Lang::get('notifications.status_completed', [], 'ru')], 'ru'),
            'message_en' => Lang::get('notifications.order_status_message', ['id' => $checkout->id, 'status' => Lang::get('notifications.status_completed', [], 'en')], 'en'),
            'link' => relative_route('order-items.show', $checkout->id),
        ]);

        return redirect()->back()->with('success', 'Checkout status updated and user notified.');
    }
}
