<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promocode;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PromocodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promocodes = Promocode::paginate(10);
        return view('admin.pages.promocodes.index', compact('promocodes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.promocodes.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:promocodes,code',
            'discount' => 'required|integer|min:1|max:100',
            'type' => 'required|in:one-time,multi-use',
            'status' => 'required|in:active,inactive',
            'expiry_date' => 'nullable|date|after:today'
        ]);

        Promocode::create($request->all());

        return redirect()->route('promocodes.index')->with('success', 'Промокод добавлен успешно.');
    }

    /**
     * Display the specified resource.
     * @param $id
     * @return Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $promocode = Promocode::findOrFail($id);
        return view('admin.pages.promocodes.show', compact('promocode'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $promocode = Promocode::findOrFail($id);
        return view('admin.pages.promocodes.edit', compact('promocode'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $promocode = Promocode::findOrFail($id);

        $request->validate([
            'code' => 'required|unique:promocodes,code,' . $id,
            'discount' => 'required|integer|min:1|max:100',
            'type' => 'required|in:one-time,multi-use',
            'status' => 'required|in:active,inactive',
            'expiry_date' => 'nullable|date|after:today'
        ]);

        $promocode->update($request->all());

        return redirect()->route('promocodes.index')->with('success', 'Промокод обновлен успешно.');
    }

    /**
     * Remove the specified resource from storage.
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $promocode = Promocode::findOrFail($id);
        $promocode->delete();

        return redirect()->route('promocodes.index')->with('success', 'Промокод удален успешно.');
    }
}
