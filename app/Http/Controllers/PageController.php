<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

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
}
