<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Promocode;
use Illuminate\Support\Facades\Cookie;

class PageController extends Controller
{
    /**
     * @return Factory|View
     */
    public function faq()
    {
        $faqs = Faq::where('status', 1)->get();

        return view('pages.faq', compact('faqs'));
    }

    /**
     * @return Factory|View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * @return Factory|View
     */
    public function account()
    {
        $user = Auth::user();
        $user->load('addresses');

        $orders = $user->checkouts()->with('orderItems.product')->get();

        return view('pages.account', compact('user', 'orders'));
    }

    /**
     * @return Factory|View
     */
    public function order_completed()
    {
        return view('pages.order-completed');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function privacyPolicy()
    {
        return view('pages.privacy');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function terms()
    {
        return view('pages.terms');
    }
}
