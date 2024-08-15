<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
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
        $checkouts = Checkout::latest()->paginate(5);
        return view('admin.pages.checkouts.index', compact('checkouts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {

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
     * Show the form for editing the specified resource.
     *
     * @param Checkout $checkout
     * @return void
     */
    public function edit(Checkout $checkout)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Checkout $checkout
     * @return void
     */

    public function update(Request $request, Checkout $checkout)
    {

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Checkout $checkout
     * @return void
     */
    public function destroy(Checkout $checkout)
    {

    }

}
