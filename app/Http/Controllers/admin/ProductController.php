<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductMetadata;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('admin.pages.products.index', compact('products'))->with('i', 0);
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
            'category_id' => 'required|exists:categories,id',
        ]);

        $input = $request->all();

        $input['slug'] = Str::slug($request->input('name_en'), '-');

        if ($request->hasFile('images')) {
            $imagePaths = [];

            foreach ($request->file('images') as $image) {
                $destinationPath = 'upload/img/products/';
                $profileImage = date('YmdHis') . '_' . Str::random(5) . "." . $image->getClientOriginalExtension();

                // Обработка изображения с водяным знаком
                $img = Image::make($image->getRealPath());

                // Настройка водяного знака
                $watermark = Image::make(public_path('images/logo.png'));
                $img->insert($watermark, 'bottom-right', 10, 10);

                $img->save($destinationPath . $profileImage);

                $imagePaths[] = $destinationPath . $profileImage;
            }

            $input['images'] = json_encode($imagePaths);
        }

        $totalQuantity = 0;
        foreach ($request->size as $size) {
            if (isset($size['quantity']) && is_numeric($size['quantity'])) {
                $totalQuantity += (int)$size['quantity'];
            }
        }

        $input['category_id'] = $request->category_id;
        $input['size'] = json_encode($request->size);
        $input['gender'] = json_encode($request->gender);
        $input['status'] = json_encode($request->status);
        $input['quantity'] = $totalQuantity;
        $input['code'] = random_int(1000, 9999) . '-' . random_int(1000, 9999);

        $product = Product::create($input);
        if ($request->primary_price || $request->product_link) {
            ProductMetadata::create([
                'product_id' => $product->id,
                'primary_price' => $request->primary_price,
                'product_link' => $request->product_link,
            ]);
        }
        Artisan::call('sitemap:generate');

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
        $size = json_decode($product->size, true);
        $gender = json_decode($product->gender, true);
        $status = json_decode($product->status, true);
        $metadata = $product->metadata;
        return view('admin.pages.products.show', compact('product', 'size', 'gender', 'status', 'metadata'));
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
        $selectedSizes = json_decode($product->size, true);
        $selectedGender = json_decode($product->gender);
        $selectedStatus = json_decode($product->status);
        $availableSizes = ['0-3', '3-6', '6-12', '12-18', '18-24'];
        $availableGender = ['boy', 'girl'];
        $availableStatus = ['new', 'top'];
        $discount = $product->price - ($product->price * $product->discount) / 100;
        $metadata = $product->metadata;

        return view('admin.pages.products.edit', compact('product', 'categories', 'selectedSizes', 'selectedStatus', 'selectedGender', 'availableSizes', 'availableGender', 'availableStatus', 'discount', 'metadata'));
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
            'category_id' => 'required|exists:categories,id',
        ]);

        $input = $request->all();

        $input['slug'] = Str::slug($request->input('name_en'), '-');

        if ($request->status === null) {
            $input['status'] = 'null';
        }

        if ($request->hasFile('images')) {
            $imagePaths = [];

            foreach ($request->file('images') as $image) {
                $destinationPath = 'upload/img/products/';
                $profileImage = date('YmdHis') . '_' . Str::random(5) . "." . $image->getClientOriginalExtension();

                $img = Image::make($image->getRealPath());
                $watermark = Image::make(public_path('images/logo.png'));
                $img->insert($watermark, 'bottom-right', 10, 10);

                $img->save($destinationPath . $profileImage);
                $imagePaths[] = $destinationPath . $profileImage;
            }

            $input['images'] = json_encode($imagePaths);

            // Delete existing images
            if ($product->images) {
                $existingImages = json_decode($product->images);
                foreach ($existingImages as $oldImage) {
                    $oldImagePath = public_path($oldImage);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }
        } else {
            $input['images'] = $product->images; // Keep existing images if no new images are uploaded
        }

        // Calculate the sum of quantities from the size array
        $totalQuantity = 0;
        foreach ($request->size as $size) {
            if (isset($size['quantity']) && is_numeric($size['quantity'])) {
                $totalQuantity += (int)$size['quantity'];
            }
        }

        $input['category_id'] = $request->category_id;
        $input['size'] = json_encode($request->size);
        $input['quantity'] = $totalQuantity; // Store the total quantity

        $product->update($input);
        if ($request->primary_price || $request->product_link) {
            $product->metadata()->updateOrCreate(
                ['product_id' => $product->id],
                ['primary_price' => $request->primary_price, 'product_link' => $request->product_link]
            );
        } else {
            $product->metadata()->delete();
        }
        Artisan::call('sitemap:generate');

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
        Artisan::call('sitemap:generate');

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }

}
