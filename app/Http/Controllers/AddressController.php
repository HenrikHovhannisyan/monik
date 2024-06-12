<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'postcode' => 'required|string|max:10',
        ]);

        Auth::user()->addresses()->create($request->all());

        return redirect()->back()->with('success', __('messages.address_added'));
    }

    /**
     * Display the specified resource.
     * @param $id
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param string $id
     * @return Factory|View
     */
    public function edit($id)
    {
        $address = Address::findOrFail($id);
        return view('pages.account', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Address $address
     * @return RedirectResponse
     */
    public function update(Request $request, Address $address)
    {
        $request->validate([
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'postcode' => 'required|string|max:10',
        ]);

        $address->update($request->all());

        return redirect()->back()->with('success', __('messages.address_updated'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $address = Address::findOrFail($id);
        $address->delete();

        return redirect()->back()->with('success', __('messages.address_deleted'));
    }

}
