<?php


namespace App\Http\Controllers;

use App\Models\Vol;
use App\Models\Avion;
use App\Models\Pilote;
use Illuminate\Http\Request;

class VolController extends Controller
{
    public function index()
    {
        $vols = Vol::with('avion', 'pilote')->get();
        return view('vols.index', compact('vols'));
    }

    public function create()
    {
        $avions = Avion::all();
        $pilotes = Pilote::all();
        return view('vols.create', compact('avions', 'pilotes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'CodeAv' => 'required|exists:avions,CodeAv',
            'MatPil' => 'required|exists:pilotes,MatPil',
            'DateVol' => 'required|date',
            'VilleDép' => 'required|string|max:50',
            'VilleArr' => 'required|string|max:50',
            'NbrePass' => 'required|integer|min:40',
            'VolRéalisé' => 'nullable|boolean',
        ]);

        Vol::create($request->all());

        return redirect()->route('vols.index')->with('success', 'Vol ajouté avec succès');
    }

    public function edit(Vol $vol)
    {
        $avions = Avion::all();
        $pilotes = Pilote::all();
        return view('vols.edit', compact('vol', 'avions', 'pilotes'));
    }

    public function update(Request $request, Vol $vol)
    {
        $request->validate([
            'CodeAv' => 'required|exists:avions,CodeAv',
            'MatPil' => 'required|exists:pilotes,MatPil',
            'DateVol' => 'required|date',
            'VilleDép' => 'required|string|max:50',
            'VilleArr' => 'required|string|max:50',
            'NbrePass' => 'required|integer|min:40',
            'VolRéalisé' => 'nullable|boolean',
        ]);

        $vol->update($request->all());

        return redirect()->route('vols.index')->with('success', 'Vol mis à jour');
    }

    public function destroy(Vol $vol)
    {
        $vol->delete();
        return redirect()->route('vols.index')->with('success', 'Vol supprimé');
    }

    public function volsParAvion($codeAv)
    {
        $vols = Vol::where('CodeAv', $codeAv)->with('avion', 'pilote')->get();
        return view('vols.index', compact('vols'));
    }

    public function volsParPilote($matPil)
    {
        $vols = Vol::where('MatPil', $matPil)->with('avion', 'pilote')->get();
        return view('vols.index', compact('vols'));
    }
}
