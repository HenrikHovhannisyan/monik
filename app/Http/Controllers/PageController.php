<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\Auth;
use App\Models\Promocode;
use Illuminate\Support\Facades\Cookie;

class PageController extends Controller
{
    public function faq()
    {
        $faqs = Faq::where('status', 1)->get();

        return view('pages.faq', compact('faqs'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function account()
    {
        $user = Auth::user();
        $user->load('addresses');

        $orders = $user->checkouts()->with('orderItems.product')->get();

        return view('pages.account', compact('user', 'orders'));
    }

    public function checkout()
    {
        $user = Auth::user();
        $user->load('addresses');

        $promocodeCode = Cookie::get('applied_promocode');
        $promocodeDiscount = 0;

        if ($promocodeCode) {
            $promocode = Promocode::where('code', $promocodeCode)->first();
            if ($promocode && $promocode->status === 'active') {
                $promocodeDiscount = $promocode->discount;
            }
        }

        return view('pages.checkout', compact('user', 'promocodeDiscount'));
    }

    public function order_completed()
    {
        return view('pages.order-completed');
    }
}
