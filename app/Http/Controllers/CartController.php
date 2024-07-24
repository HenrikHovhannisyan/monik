<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('pages.cart');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('url.intended', url()->previous());
        }

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'size' => 'required|string',
        ]);

        $userId = Auth::id();
        $productId = $request->product_id;
        $size = $request->size;
        $quantity = $request->quantity;

        $cartItem = CartItem::where('user_id', $userId)
            ->where('product_id', $productId)
            ->where('size', $size)
            ->first();

        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->save();
        } else {
            CartItem::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'size' => $size,
                'quantity' => $quantity,
            ]);
        }

        return redirect()->route('cart.index');
    }


    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $cartItem = CartItem::findOrFail($id);

        if ($cartItem->user_id == Auth::id()) {
            $cartItem->delete();
            return redirect()->back();
        }

        return redirect()->route('cart.index');
    }
}
