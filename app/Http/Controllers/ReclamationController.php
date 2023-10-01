<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;

class ReclamationController extends Controller
{
    public function index()
    {
        $reclamations = Reclamation::all();

        return View::make('reclamation.index', compact('reclamations'));
    }

    public function create()
{
    $reclamationTypes = Reclamation::getReclamationTypeOptions();

    return view('reclamation.create', compact('reclamationTypes'));
}

    public function store(Request $request)
{
    $request->validate([
        'content' => 'required',
        'type' => ['required', Rule::in(array_keys(Reclamation::getReclamationTypeOptions()))],
    ]);

    $reclamation = new Reclamation([
        'content' => $request->input('content'),
        'type' => $request->input('type'),
        'user_id' => auth()->user()->id,
    ]);

    $reclamation->save();

    // Correct the route name to 'reclamations.index'
    return redirect()->route('reclamation.index')->with('success', 'Réclamation soumise avec succès !');
}

    public function edit($id)
    {
        $reclamation = Reclamation::findOrFail($id);
        $reclamationTypes = Reclamation::getReclamationTypeOptions();

        return view('reclamation.edit', compact('reclamation', 'reclamationTypes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|max:255',
            'type' => ['required', Rule::in(array_keys(Reclamation::getReclamationTypeOptions()))],
        ]);

        $reclamation = Reclamation::findOrFail($id);

        $reclamation->update([
            'content' => $request->input('content'),
            'type' => $request->input('type'),
        ]);

        return redirect()->route('reclamation.index')->with('success', 'Réclamation mise à jour avec succès !');
    }

    public function destroy($id)
    {
        $reclamation = Reclamation::find($id);
        $reclamation->delete();

        return redirect()->route('reclamation.index')->with('success', 'Réclamation supprimée avec succès !');
    }
}
