<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::latest()->paginate(5);
        return view('admin.pages.faqs.index', compact('faqs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'question_hy' => 'required|string|max:255',
            'question_ru' => 'required|string|max:255',
            'question_en' => 'required|string|max:255',
            'answer_hy' => 'required|string',
            'answer_ru' => 'required|string',
            'answer_en' => 'required|string',
        ]);

        Faq::create($request->all());

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully.');
    }

    /**
     * Display the specified resource.
     * @param Faq $faq
     * @return Factory|View
     */
    public function show(Faq $faq)
    {
        return view('admin.pages.faqs.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param Faq $faq
     * @return Factory|View
     */
    public function edit(Faq $faq)
    {
        return view('admin.pages.faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Faq $faq
     * @return RedirectResponse
     */
    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question_hy' => 'required|string|max:255',
            'question_ru' => 'required|string|max:255',
            'question_en' => 'required|string|max:255',
            'answer_hy' => 'required|string',
            'answer_ru' => 'required|string',
            'answer_en' => 'required|string',
        ]);

        $faq->update($request->all());

        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param Faq $faq
     * @return RedirectResponse
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
