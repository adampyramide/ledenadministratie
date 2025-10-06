<?php

namespace App\Http\Controllers;

use App\Models\Familie;
use Illuminate\Http\Request;

class FamilieController extends Controller
{
    public function index()
    {
        $families = Familie::all();
        return view('families.index', compact('families'));
    }

    public function create()
    {
        return view('families.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'naam' => 'required|string|max:255',
            'adres' => 'nullable|string|max:255',
        ]);

        Familie::create($validated);
        return redirect()->route('families.index')->with('success', 'Familie toegevoegd.');
    }

    public function show(Familie $family)
    {
        return view('families.show', ['familie' => $family]);
    }

    public function edit(Familie $family)
    {
        return view('families.edit', ['familie' => $family]);
    }

    public function update(Request $request, Familie $family)
    {
        $validated = $request->validate([
            'naam' => 'required|string|max:255',
            'adres' => 'nullable|string|max:255',
        ]);

        $family->update($validated);
        return redirect()->route('families.index')->with('success', 'Familie bijgewerkt.');
    }

    public function destroy(Familie $family)
    {
        $family->delete();
        return redirect()->route('families.index')->with('success', 'Familie verwijderd.');
    }
}
