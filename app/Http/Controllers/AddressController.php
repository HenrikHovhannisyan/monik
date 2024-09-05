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
            'address' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'house_number' => 'required|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'postcode' => 'nullable|string|max:10',
        ]);

        Auth::user()->addresses()->create($request->only([
            'address', 'city', 'region', 'street', 'house_number', 'latitude', 'longitude', 'postcode'
        ]));

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
     * @param Address $address
     * @return Factory|View
     */
    public function edit(Address $address)
    {
        return view('pages.edit_address', compact('address'));
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
            'address' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'house_number' => 'required|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'postcode' => 'nullable|string|max:10',
        ]);

        $address->update($request->only([
            'address', 'city', 'region', 'street', 'house_number', 'latitude', 'longitude', 'postcode'
        ]));

        return redirect()->back()->with('success', __('messages.address_updated'));
    }

    /**
     * Remove the specified resource from storage.
     * @param Address $address
     * @return RedirectResponse
     */
    public function destroy(Address $address)
    {
        $address->delete();

        return redirect()->back()->with('success', __('messages.address_deleted'));
    }

}
