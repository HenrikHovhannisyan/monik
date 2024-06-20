<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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

    /**
     * @param $id
     * @return Factory|View
     */
    public function product($id)
    {
        $product = Product::find($id);
        $size = json_decode($product->size, true);
        $gender = json_decode($product->gender, true);

        $category = Category::findOrFail($product->category_id);
        $randomProducts = $category->products()->inRandomOrder()->take(5)->get();

        return view('pages.product-detail', compact('product', 'size', 'gender', 'randomProducts'));
    }

    public function products()
    {
        $products = Product::paginate(9);
        $gender = Product::whereJsonContains('gender', ["boy", "girl"])->paginate(9);
        $newProducts = Product::whereJsonContains('status', ["new"])->paginate(9);
        $topProducts = Product::whereJsonContains('status', ["top"])->paginate(9);
        $saleProducts = Product::whereNotNull('discount')->paginate(9);

        return view('pages.products', compact('products'));
    }

    public function filter(Request $request)
    {
        $products = Product::where(function ($query) {
            $query->whereJsonContains('gender', ["boy", "girl"])
                ->orWhereJsonContains('status', ["new", "top"])
                ->orWhereJsonContains('size', ["0-3", "3-6", "6-12", "12-18", "18-24"])
                ->orWhereNotNull('discount');
        })->paginate(9);

        return view('pages.products', compact('products'));
    }


}
