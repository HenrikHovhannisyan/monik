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
     * @param $slug
     * @return Factory|View
     */
    public function product($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $size = json_decode($product->size, true);
        $gender = json_decode($product->gender, true);

        $category = Category::findOrFail($product->category_id);
        $randomProducts = $category->products()->inRandomOrder()->take(5)->get();

        return view('pages.product-detail', compact('product', 'size', 'gender', 'randomProducts'));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function products(Request $request)
    {
        $query = Product::query();

        if ($request->has('categories')) {
            $query->whereIn('category_id', $request->categories);
        }

        if ($request->has('gender')) {
            $query->whereJsonContains('gender', $request->gender);
        }

        if ($request->has('status')) {
            $statuses = $request->status;
            $query->where(function($query) use ($statuses) {
                foreach ($statuses as $status) {
                    $query->orWhereJsonContains('status', $status);
                }
            });
        }

        if ($request->filled('price_first') && $request->filled('price_second')) {
            $max_price = Product::max('price');
            $price_second = min($request->price_second, $max_price);
            $query->whereBetween('price', [$request->price_first, $price_second]);
        }

        $query->where(function($query) {
            $query->whereRaw("CAST(quantity AS UNSIGNED) > 0");
        });

        if ($request->has('size')) {
            foreach ($request->size as $size) {
                $query->whereRaw("JSON_EXTRACT(size, '$.\"{$size}\".quantity') IS NOT NULL")
                    ->whereRaw("CAST(JSON_EXTRACT(size, '$.\"{$size}\".quantity') AS UNSIGNED) > 0");
            }
        }

        if ($request->has('discount')) {
            $query->whereNotNull('discount');
        }

        if ($request->filled('sort')) {
            switch ($request->sort) {
                case 'price':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price-desc':
                    $query->orderBy('price', 'desc');
                    break;
                default:
                    break;
            }
        }

        $query->orderBy('created_at', 'desc');

        $products = $query->paginate(12)->appends($request->query());

        return view('pages.products', compact('products'));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function search(Request $request)
    {
        $searchQuery = $request->input('search');

        $products = Product::where('name_am', 'like', '%' . $searchQuery . '%')
            ->orWhere('name_ru', 'like', '%' . $searchQuery . '%')
            ->orWhere('name_en', 'like', '%' . $searchQuery . '%')
            ->orWhere('code', 'like', '%' . $searchQuery . '%')
            ->paginate(12);

        return view('pages.search-results', compact('products'));
    }

}
