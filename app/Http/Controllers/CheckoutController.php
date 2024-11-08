<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Checkout;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Promocode;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cookie;

class CheckoutController extends Controller
{
    /**
     *
     */
    public function index()
    {
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('checkouts.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'shipping_address' => 'required|exists:addresses,id',
            'order_notes' => 'nullable|string|max:255',
            'payment_option' => 'required|string|in:cash,card',
        ]);

        $cartItems = CartItem::where('user_id', auth()->id())->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->withErrors(__('messages.cart_empty'));
        }

        // Инициализируем переменную для скидки промокода
        $promocodeDiscount = 0;
        $promocodeCode = Cookie::get('applied_promocode');

        if ($promocodeCode) {
            $promocode = Promocode::where('code', $promocodeCode)->first();

            if ($promocode) {
                if ($promocode->type === 'multi-use' && $promocode->expiry_date && now()->gt($promocode->expiry_date)) {
                    return redirect()->back()->withErrors(__('messages.promocode_expired'));
                }

                if ($promocode->type === 'one-time' && $promocode->status === 'active') {
                    $promocode->status = 'inactive';
                    $promocode->save();
                }

                $promocodeDiscount = $promocode->discount ?? 0;
            }
        }

        $totalPrice = 0;
        $processedProducts = [];

        // Создаем и сохраняем основной заказ перед добавлением записей товаров
        $checkout = Checkout::create([
            'user_id' => auth()->id(),
            'shipping_address' => $validatedData['shipping_address'],
            'order_notes' => $validatedData['order_notes'] ?? '',
            'payment_option' => $validatedData['payment_option'],
            'status' => 'processing',
            'total_price' => 0, // Временно устанавливаем 0, пересчитаем после добавления товаров
        ]);

        foreach ($cartItems as $item) {
            $product = $item->product;

            // Применяем скидку промокода только если скидка на продукт меньше
            if ($product->discount >= $promocodeDiscount) {
                $finalPrice = $product->price - ($product->price * $product->discount / 100);
            } else {
                $finalPrice = $product->price - ($product->price * $promocodeDiscount / 100);
            }

            $totalPrice += $finalPrice * $item->quantity;

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
                'price' => $finalPrice,
                'size_details' => json_encode([$item->size => ['quantity' => $item->quantity]]),
            ]);
        }

        // Обновляем общую сумму заказа
        $checkout->total_price = $totalPrice;
        $checkout->save();

        foreach ($processedProducts as $productId => $sizes) {
            $product = Product::find($productId);
            $product->size = json_encode($sizes);
            $product->quantity = $this->calculateTotalQuantity($sizes);
            $product->save();
        }

        // Очищаем корзину
        CartItem::where('user_id', auth()->id())->delete();

        // Удаляем промокод из куки после успешной покупки
        if ($promocodeCode) {
            Cookie::queue(Cookie::forget('applied_promocode'));
        }

        return redirect()->route('order-completed');
    }


    /**
     * @param Checkout $checkout
     */
    public function show(Checkout $checkout)
    {
    }

    /**
     * @param Checkout $checkout
     */
    public function edit(Checkout $checkout)
    {
    }

    /**
     * @param Request $request
     * @param Checkout $checkout
     * @return RedirectResponse
     */
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

    /**
     * @param Checkout $checkout
     * @return RedirectResponse
     */
    public function destroy(Checkout $checkout)
    {
        $checkout->delete();

        return redirect()->route('home');
    }

    /**
     * @param array $sizes
     * @return int
     */
    private function calculateTotalQuantity(array $sizes): int
    {
        $totalQuantity = collect($sizes)
            ->filter(fn($size) => $size['quantity'] !== null)
            ->sum(fn($size) => $size['quantity']);

        return $totalQuantity > 0 ? $totalQuantity : 0;
    }

    public function applyPromocode(Request $request)
    {
        $request->validate([
            'promocode' => 'required|string',
        ]);

        $promocode = Promocode::where('code', $request->input('promocode'))->first();

        if (!$promocode) {
            return redirect()->back()->withErrors(['promocode' => __('messages.invalid_promocode')]);
        }

        // Проверяем статус промокода
        if ($promocode->status === 'inactive') {
            return redirect()->back()->withErrors(['promocode' => __('messages.promocode_inactive')]);
        }

        // Проверяем срок действия для многоразового промокода
        if ($promocode->type === 'multi-use') {
            if ($promocode->expiry_date && Carbon::parse($promocode->expiry_date)->isPast()) {
                $promocode->status = 'inactive';
                $promocode->save();
                return redirect()->back()->withErrors(['promocode' => __('messages.promocode_expired')]);
            }
        }

        Cookie::queue(Cookie::make('applied_promocode', $promocode->code, 30));

        return redirect()->back()->with('success', __('messages.promocode_applied'));
    }

}

