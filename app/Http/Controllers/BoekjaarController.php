<?php

namespace App\Http\Controllers;

use App\Models\Boekjaar;
use Illuminate\Http\Request;

class BoekjaarController extends Controller
{
    public function index()
    {
        $boekjaren = Boekjaar::all();
        return view('boekjaren.index', compact('boekjaren'));
    }

    public function create()
    {
        return view('boekjaren.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jaar' => 'required|integer|unique:boekjaren,jaar',
        ]);

        Boekjaar::create($validated);
        return redirect()->route('boekjaren.index')->with('success', 'Boekjaar toegevoegd.');
    }

    public function show(Boekjaar $boekjaren)
    {
        return view('boekjaren.show', ['boekjaar' => $boekjaren]);
    }

    public function edit(Boekjaar $boekjaren)
    {
        return view('boekjaren.edit', ['boekjaar' => $boekjaren]);
    }

    public function update(Request $request, Boekjaar $boekjaren)
    {
        $validated = $request->validate([
            'jaar' => 'required|integer|unique:boekjaren,jaar,' . $boekjaren->id,
        ]);

        $boekjaren->update($validated);
        return redirect()->route('boekjaren.index')->with('success', 'Boekjaar bijgewerkt.');
    }

    public function destroy(Boekjaar $boekjaren)
    {
        $boekjaren->delete();
        return redirect()->route('boekjaren.index')->with('success', 'Boekjaar verwijderd.');
    }
}
