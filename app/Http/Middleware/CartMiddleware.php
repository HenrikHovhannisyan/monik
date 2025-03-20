<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CartItem;
use App\Models\Product;

class CartMiddleware
{
    public function handle($request, Closure $next)
    {
        // Получаем товары пользователя в корзине
        $cartItems = CartItem::where('user_id', Auth::id())->get();
        $lowStockItems = [];

        foreach ($cartItems as $cartItem) {
            $product = Product::find($cartItem->product_id);

            if ($product) {
                // Декодируем JSON с размерами
                $sizes = json_decode($product->size, true);
                $cartSize = $cartItem->size; // Размер, который выбрал пользователь

                // Проверяем наличие указанного размера товара
                if (isset($sizes[$cartSize])) {
                    $availableStock = $sizes[$cartSize]['quantity']; // Доступное количество товара для этого размера

                    // Если товар в данном размере отсутствует
                    if ($availableStock === 0) {
                        $cartItem->status = 'out_of_stock';
                    } elseif ($availableStock < $cartItem->quantity) {
                        // Если товара недостаточно, меняем статус на 'out_of_stock' и сохраняем инфо для низкого запаса
                        $cartItem->status = 'out_of_stock';
                        $lowStockItems[] = [
                            'product' => $product->name,
                            'size' => $cartSize,
                            'available' => $availableStock,
                        ];
                    } else {
                        // Если товар есть в достаточном количестве, устанавливаем статус как 'in_stock'
                        $cartItem->status = 'in_stock';
                    }

                    // Сохраняем статус корзины для этого товара
                    $cartItem->save();
                }
            }
        }

        // Делаем переменные доступными во всех представлениях
        view()->share([
            'cartItems' => $cartItems,
            'lowStockItems' => $lowStockItems
        ]);

        return $next($request);
    }
}

