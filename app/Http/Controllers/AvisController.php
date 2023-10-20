<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avis;

class AvisController extends Controller
{
    public function index()
    {
        $avis = Avis::all();
        return view('avis.index', compact('avis'));
    }

    public function create()
    {
        return view('avis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Avis::create([
            'content' => $request->input('content'),
            'user_id' => auth()->id(), // Ajoute l'ID de l'utilisateur connecté
        ]);

        return redirect()->route('avis.index')->with('success', 'Avis créé avec succès.');
    }

    public function show(Avis $avis)
    {
        return view('avis.show', compact('avis'));
    }

    public function edit(Avis $avis)
    {
        return view('avis.edit', compact('avis'));
    }

    public function update(Request $request, Avis $avis)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $avis->update([
            'content' => $request->input('content'),
        ]);

        return redirect()->route('avis.index')->with('success', 'Avis mis à jour avec succès.');
    }

    public function destroy(Avis $avis)
    {
        $avis->delete();
        return redirect()->route('avis.index')->with('success', 'Avis supprimé avec succès.');
    }
}
