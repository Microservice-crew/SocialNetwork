<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;


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
        'picture' => 'nullable|image', // Validation for the picture
    ]);

    // Handle picture upload
    if ($request->hasFile('picture')) {
        $image = $request->file('picture');
        $newName = uniqid() . '.' . $image->getClientOriginalExtension();
        $destinationPath = 'uploads';
        $image->move($destinationPath, $newName);
    } else {
        $newName = null; 
    }

    $reclamation = new Reclamation([
        'content' => $request->input('content'),
        'type' => $request->input('type'),
        'picture' => $newName, // Assign the uploaded picture or null
        'user_id' => auth()->user()->id,
    ]);

    $reclamation->save();

    // Corrected the route name to 'reclamations.index'
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
        'picture' => 'bail|nullable|image|max:1024', // Add validation for picture
    ]);

    $reclamation = Reclamation::findOrFail($id);

    $data = [
        'content' => $request->input('content'),
        'type' => $request->input('type'),
    ];

    // Handle picture update if a new picture is provided
    if ($request->hasFile('picture')) {
        $newname = uniqid();
        $image = $request->file('picture');
        $newname .= "." . $image->getClientOriginalExtension();
        $destinationPath = 'uploads';
        $image->move($destinationPath, $newname);
        $data['picture'] = $newname;

        // Delete the old picture (if it exists)
        if ($reclamation->picture) {
            Storage::delete("uploads/{$reclamation->picture}");
        }
    }

    $reclamation->update($data);

    return redirect()->route('reclamation.index')->with('success', 'Réclamation mise à jour avec succès !');
}

    public function destroy($id)
    {
        $reclamation = Reclamation::find($id);
        $reclamation->delete();

        return redirect()->route('reclamation.index')->with('success', 'Réclamation supprimée avec succès !');
    }
}
