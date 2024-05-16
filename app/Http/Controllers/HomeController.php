<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Support\Renderable;
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
        $gender = Product::whereJsonContains('gender', ["boy", "girl"])->get();
        $status = Product::whereJsonContains('status', ["new", "top"])->get();
//        dd($status);
        $product = Product::all();
        $categories = Category::has('products')->get();

        return view('home', compact('product', 'categories'));
    }
}
