<?php

namespace App\Http\Controllers;

use App\Models\Familielid;
use App\Models\Familie;
use App\Models\SoortLid;
use Illuminate\Http\Request;

class FamilielidController extends Controller
{
    public function index()
    {
        $familieleden = Familielid::with(['familie', 'soortLid'])->get();
        return view('familieleden.index', compact('familieleden'));
    }

    public function create()
    {
        $families = Familie::all();
        $soortenLeden = SoortLid::all();
        return view('familieleden.create', compact('families', 'soortenLeden'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'naam' => 'required|string|max:255',
            'geboortedatum' => 'required|date',
            'familie_id' => 'required|exists:families,id',
            'soort_lid_id' => 'required|exists:soorten_leden,id',
        ]);

        Familielid::create($validated);
        return redirect()->route('familieleden.index')->with('success', 'Familielid toegevoegd.');
    }

    public function show(Familielid $familielid)
    {
        return view('familieleden.show', ['familielid' => $familielid]);
    }

    public function edit(Familielid $familielid)
    {
        $families = Familie::all();
        $soortenLeden = SoortLid::all();
        return view('familieleden.edit', compact('familielid', 'families', 'soortenLeden'));
    }

    public function update(Request $request, Familielid $familielid)
    {
        $validated = $request->validate([
            'naam' => 'required|string|max:255',
            'geboortedatum' => 'required|date',
            'familie_id' => 'required|exists:families,id',
            'soort_lid_id' => 'required|exists:soorten_leden,id',
        ]);

        $familielid->update($validated);
        return redirect()->route('familieleden.index')->with('success', 'Familielid bijgewerkt.');
    }

    public function destroy(Familielid $familielid)
    {
        $familielid->delete();
        return redirect()->route('familieleden.index')->with('success', 'Familielid verwijderd.');
    }
}
