<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);

        return view('admin.pages.products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_am' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
            'description_am' => 'required',
            'description_ru' => 'required',
            'description_en' => 'required',
            'price' => 'required|numeric|min:0',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'size' => 'required|array',
            'gender' => 'required|array',
            'status' => 'array',
            'quantity' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $input = $request->all();

        if ($request->hasFile('images')) {
            $imagePaths = [];

            foreach ($request->file('images') as $image) {
                $destinationPath = 'upload/img/products/';
                $profileImage = date('YmdHis') . '_' . Str::random(5) . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $imagePaths[] = $destinationPath . $profileImage;
            }

            $input['images'] = json_encode($imagePaths);
        }

        $input['category_id'] = $request->category_id;
        $input['size'] = json_encode($request->size);
        $input['gender'] = json_encode($request->gender);
        $input['status'] = json_encode($request->status);
        $input['code'] = random_int(1000, 9999) . '-' . random_int(1000, 9999);

        Product::create($input);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Factory|View
     */
    public function show(Product $product)
    {
        $size = json_decode($product->size);
        $gender = json_decode($product->gender);
        $status = json_decode($product->status);
        return view('admin.pages.products.show', compact('product', 'size', 'gender', 'status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Factory|View
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $selectedSizes = json_decode($product->size);
        $selectedGender = json_decode($product->gender);
        $selectedStatus = json_decode($product->status);
        $availableSizes = ['0-3', '3-6', '6-12', '12-18', '18-24'];
        $availableGender = ['boy', 'girl'];
        $availableStatus = ['new', 'top'];
        $discount = $product->price - ($product->price * $product->discount) / 100;

        return view('admin.pages.products.edit', compact('product', 'categories', 'selectedSizes', 'selectedStatus', 'selectedGender', 'availableSizes', 'availableGender', 'availableStatus', 'discount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     */

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name_am' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
            'description_am' => 'required',
            'description_ru' => 'required',
            'description_en' => 'required',
            'price' => 'required|numeric|min:0',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'size' => 'required|array',
            'gender' => 'required|array',
            'status' => 'array',
            'quantity' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $input = $request->all();

        if ($request->status === null) {
            $input['status'] = 'null';
        }

        if ($request->hasFile('images')) {
            $imagePaths = [];

            foreach ($request->file('images') as $image) {
                $destinationPath = 'upload/img/products';
                $profileImage = date('YmdHis') . '_' . Str::random(5) . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $imagePaths[] = $destinationPath . '/' . $profileImage;
            }
            $input['images'] = json_encode($imagePaths);

            if ($product->images) {
                $existingImages = json_decode($product->images);
                foreach ($existingImages as $oldImage) {
                    $oldImagePath = public_path($oldImage);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }
        }

        $input['category_id'] = $request->category_id;
        $product->update($input);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product)
    {
        if ($product->images) {
            $existingImages = json_decode($product->images);
            foreach ($existingImages as $oldImage) {
                $oldImagePath = public_path($oldImage);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }

        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }

}
