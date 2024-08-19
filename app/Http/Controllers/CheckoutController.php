<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Checkout;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        return view('checkouts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'shipping_address' => 'required|exists:addresses,id',
            'order_notes' => 'nullable|string|max:255',
            'payment_option' => 'required|string|in:cash,card',
        ]);

        $cartItems = CartItem::where('user_id', auth()->id())->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->withErrors(__('Your cart is empty.'));
        }

        $totalPrice = $cartItems->sum(fn($item) => ($item->product->price - ($item->product->price * $item->product->discount / 100)) * $item->quantity);

        $checkout = new Checkout();
        $checkout->user_id = auth()->id();
        $checkout->shipping_address = $validatedData['shipping_address'];
        $checkout->order_notes = $validatedData['order_notes'] ?? '';
        $checkout->payment_option = $validatedData['payment_option'];
        $checkout->total_price = $totalPrice;
        $checkout->status = 'processing';
        $checkout->save();

        $processedProducts = [];

        foreach ($cartItems as $item) {
            $product = $item->product;

            if (!isset($processedProducts[$product->id])) {
                $processedProducts[$product->id] = json_decode($product->size, true);
            }

            $sizes = $processedProducts[$product->id];

            if (isset($sizes[$item->size])) {
                $sizes[$item->size]['quantity'] -= $item->quantity;

                if ($sizes[$item->size]['quantity'] <= 0) {
                    $sizes[$item->size]['quantity'] = null;
                }
            }

            $processedProducts[$product->id] = $sizes;

            OrderItem::create([
                'checkout_id' => $checkout->id,
                'product_id' => $product->id,
                'quantity' => $item->quantity,
                'price' => $product->price - ($product->price * $product->discount / 100),
                'size_details' => json_encode([$item->size => ['quantity' => $item->quantity]]),
            ]);
        }

        foreach ($processedProducts as $productId => $sizes) {
            $product = Product::find($productId);
            $product->size = json_encode($sizes);
            $product->quantity = $this->calculateTotalQuantity($sizes);
            $product->save();
        }

        CartItem::where('user_id', auth()->id())->delete();

        return redirect()->route('order-completed');
    }

    public function show(Checkout $checkout)
    {
    }

    public function edit(Checkout $checkout)
    {
    }

    public function update(Request $request, Checkout $checkout)
    {
        $validatedData = $request->validate([
            'shipping_address' => 'required|string|max:255',
            'order_notes' => 'required|string|max:255',
            'payment_option' => 'required|string|max:255',
            'total_price' => 'required|numeric',
            'status' => 'required|string',
        ]);

        $checkout->update($validatedData);

        return redirect()->route('home');
    }

    public function destroy(Checkout $checkout)
    {
        $checkout->delete();

        return redirect()->route('home');
    }

    private function calculateTotalQuantity(array $sizes): int
    {
        $totalQuantity = collect($sizes)
            ->filter(fn($size) => $size['quantity'] !== null)
            ->sum(fn($size) => $size['quantity']);

        return $totalQuantity > 0 ? $totalQuantity : 0;
    }
}

