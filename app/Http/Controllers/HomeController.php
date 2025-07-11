<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $newProducts = Product::whereJsonContains('status', ["new"])->inRandomOrder()->take(8)->get();
        $topProducts = Product::whereJsonContains('status', ["top"])->inRandomOrder()->take(8)->get();
        $saleProducts = Product::inRandomOrder()->whereNotNull('discount')->take(8)->get();
        $allProducts = Product::inRandomOrder()->take(8)->get();
        $sliderProducts = Product::inRandomOrder()->take(5)->get();

        return view('home', compact('allProducts', 'newProducts', 'topProducts', 'saleProducts', 'sliderProducts'));
    }

    public function changeLanguage($locale)
    {
        $supportedLocales = ['hy', 'ru', 'en'];

        if (!in_array($locale, $supportedLocales)) {
            abort(400, 'Unsupported language');
        }

        if (Auth::check()) {
            $user = Auth::user();
            $user->locale = $locale;
            $user->save();
        } else {
            Cookie::queue('locale', $locale, 60 * 24 * 365);
        }

        // Перенаправляем пользователя на ту же страницу, но с нужным языковым префиксом
        $previousUrl = url()->previous();
        $parsed = parse_url($previousUrl);
        $path = $parsed['path'] ?? '/';

        // Удаляем текущий языковой префикс из URL
        $segments = explode('/', ltrim($path, '/'));
        if (in_array($segments[0], $supportedLocales)) {
            array_shift($segments);
        }

        $newPath = '/' . $locale . '/' . implode('/', $segments);

        return redirect($newPath);
    }
}
