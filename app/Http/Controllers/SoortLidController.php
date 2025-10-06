<?php

namespace App\Http\Controllers;

use App\Models\SoortLid;
use Illuminate\Http\Request;

class SoortLidController extends Controller
{
    public function index()
    {
        $soortenLeden = SoortLid::all();
        return view('soorten_leden.index', compact('soortenLeden'));
    }

    public function create()
    {
        return view('soorten_leden.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'omschrijving' => 'required|string|max:255',
        ]);

        SoortLid::create($validated);
        return redirect()->route('soorten_leden.index')->with('success', 'Soort lid toegevoegd.');
    }

    public function show(SoortLid $soort)
    {
        return view('soorten_leden.show', ['soort' => $soort]);
    }

    public function edit(SoortLid $soort)
    {
        return view('soorten_leden.edit', ['soort' => $soort]);
    }

    public function update(Request $request, SoortLid $soort)
    {
        $validated = $request->validate([
            'omschrijving' => 'required|string|max:255',
        ]);

        $soort->update($validated);
        return redirect()->route('soorten_leden.index')->with('success', 'Soort lid bijgewerkt.');
    }

    public function destroy(SoortLid $soort)
    {
        $soort->delete();
        return redirect()->route('soorten_leden.index')->with('success', 'Soort lid verwijderd.');
    }
}
