<?php

namespace App\Http\Controllers;

use App\Models\Pilote;
use Illuminate\Http\Request;

class PiloteController extends Controller
{
    public function index()
    {
        $pilotes = Pilote::all();
        return view('pilotes.index', compact('pilotes'));
    }

    public function create()
    {
        return view('pilotes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'MatPil' => 'required|string|max:8|unique:pilotes',
            'NomPrénomPil' => 'required|string|max:50',
            'AdressePil' => 'required|string|max:150',
            'TelPil' => 'required|string|max:8',
        ]);

        Pilote::create($request->all());

        return redirect()->route('pilotes.index')->with('success', 'Pilote ajouté avec succès');
    }

    public function edit(Pilote $pilote)
    {
        return view('pilotes.edit', compact('pilote'));
    }

    public function update(Request $request, Pilote $pilote)
    {
        $request->validate([
            'NomPrénomPil' => 'required|string|max:50',
            'AdressePil' => 'required|string|max:150',
            'TelPil' => 'required|string|max:8',
        ]);

        $pilote->update($request->all());

        return redirect()->route('pilotes.index')->with('success', 'Pilote mis à jour');
    }

    public function destroy(Pilote $pilote)
    {
        $pilote->delete();
        return redirect()->route('pilotes.index')->with('success', 'Pilote supprimé');
    }
}
