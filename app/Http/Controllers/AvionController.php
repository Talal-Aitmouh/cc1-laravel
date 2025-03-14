<?php
namespace App\Http\Controllers;

use App\Models\Avion;
use Illuminate\Http\Request;

class AvionController extends Controller
{
    public function index()
    {
        $avions = Avion::all();
        return view('avions.index', compact('avions'));
    }

    public function create()
    {
        return view('avions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'CodeAv' => 'required|string|max:4|unique:avions',
            'ModèleAv' => 'required|string|max:50',
            'CapacitéAv' => 'required|integer|min:50',
        ]);

        Avion::create($request->all());

        return redirect()->route('avions.index')->with('success', 'Avion ajouté avec succès');
    }

    public function edit(Avion $avion)
    {
        return view('avions.edit', compact('avion'));
    }

    public function update(Request $request, Avion $avion)
    {
        $request->validate([
            'ModèleAv' => 'required|string|max:50',
            'CapacitéAv' => 'required|integer|min:50',
        ]);

        $avion->update($request->all());

        return redirect()->route('avions.index')->with('success', 'Avion mis à jour');
    }

    public function destroy(Avion $avion)
    {
        $avion->delete();
        return redirect()->route('avions.index')->with('success', 'Avion supprimé');
    }
}
