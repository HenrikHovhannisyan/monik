<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\Auth;

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
        return view('pages.account', compact('user'));
    }
}