<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

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



}
