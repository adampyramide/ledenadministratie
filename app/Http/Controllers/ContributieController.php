<?php

namespace App\Http\Controllers;

use App\Models\Contributie;
use App\Models\SoortLid;
use App\Models\Boekjaar;
use Illuminate\Http\Request;

class ContributieController extends Controller
{
    public function index()
    {
        $contributies = Contributie::with(['soortLid', 'boekjaar'])->get();
        return view('contributies.index', compact('contributies'));
    }

    public function create()
    {
        $soortenLeden = SoortLid::all();
        $boekjaren = Boekjaar::all();
        return view('contributies.create', compact('soortenLeden', 'boekjaren'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'leeftijd' => 'required|integer|min:0',
            'soort_lid_id' => 'required|exists:soorten_leden,id',
            'bedrag' => 'required|numeric|min:0',
            'boekjaar_id' => 'required|exists:boekjaren,id',
        ]);

        Contributie::create($validated);
        return redirect()->route('contributies.index')->with('success', 'Contributie toegevoegd.');
    }

    public function show(Contributie $contributie)
    {
        return view('contributies.show', ['contributie' => $contributie]);
    }

    public function edit(Contributie $contributie)
    {
        $soortenLeden = SoortLid::all();
        $boekjaren = Boekjaar::all();
        return view('contributies.edit', compact('contributie', 'soortenLeden', 'boekjaren'));
    }

    public function update(Request $request, Contributie $contributie)
    {
        $validated = $request->validate([
            'leeftijd' => 'required|integer|min:0',
            'soort_lid_id' => 'required|exists:soorten_leden,id',
            'bedrag' => 'required|numeric|min:0',
            'boekjaar_id' => 'required|exists:boekjaren,id',
        ]);

        $contributie->update($validated);
        return redirect()->route('contributies.index')->with('success', 'Contributie bijgewerkt.');
    }

    public function destroy(Contributie $contributie)
    {
        $contributie->delete();
        return redirect()->route('contributies.index')->with('success', 'Contributie verwijderd.');
    }
}
