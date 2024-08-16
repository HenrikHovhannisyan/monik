<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $checkouts = Checkout::latest()->paginate(10);
        return view('admin.pages.checkouts.index', compact('checkouts'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Display the specified resource.
     *
     * @param Checkout $checkout
     * @return Factory|View
     */
    public function show(Checkout $checkout)
    {
        $checkout->load('user.account.phones');
        return view('admin.pages.checkouts.show', compact('checkout'));
    }

    /**
     * Change the status of a checkout.
     *
     * @param Request $request
     * @param Checkout $checkout
     * @return RedirectResponse
     */
    public function changeStatusPending(Request $request, Checkout $checkout)
    {

        $checkout->update([
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Checkout status updated successfully.');
    }

    /**
     * @param Request $request
     * @param Checkout $checkout
     * @return RedirectResponse
     */
    public function changeStatusCompleted(Request $request, Checkout $checkout)
    {

        $checkout->update([
            'status' => 'completed',
        ]);

        return redirect()->back()->with('success', 'Checkout status updated successfully.');
    }

}
