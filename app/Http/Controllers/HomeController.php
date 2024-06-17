<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
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
        $newProducts = Product::whereJsonContains('status', ["new"])->inRandomOrder()->take(8)->get();
        $topProducts = Product::whereJsonContains('status', ["top"])->inRandomOrder()->take(8)->get();
        $saleProducts = Product::inRandomOrder()->whereNotNull('discount')->take(8)->get();
        $allProducts = Product::inRandomOrder()->take(8)->get();
        $sliderProducts = Product::inRandomOrder()->take(5)->get();

        return view('home', compact('allProducts', 'newProducts', 'topProducts', 'saleProducts', 'sliderProducts'));
    }

    /**
     * @param $id
     * @return Factory|View
     */
    public function quickView($id)
    {
        $product = Product::find($id);
        $size = json_decode($product->size, true);
        $gender = json_decode($product->gender, true);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return view('vendor.modal.shop-quick-view', compact('product', 'size', 'gender'));
    }

}
