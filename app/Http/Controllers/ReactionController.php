<?php

namespace App\Http\Controllers;
use App\Models\Avis;

use Illuminate\Http\Request;
use App\Models\Reaction;

class ReactionController extends Controller
{
    public function index()
    {
        $reactions = Reaction::all();
        return view('reactions.index', compact('reactions'));
    }

    public function create()
    {
        return view('reactions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'user_id' => 'required',
            'avis_id' => 'required',
            'date_reaction' => 'required',
        ]);

        Reaction::create($validatedData);

        return redirect()->route('reactions.index');
    }

    public function show($id)
    {
        $reaction = Reaction::find($id);
        return view('reactions.show', compact('reaction'));
    }

    public function edit($id)
    {
        $reaction = Reaction::find($id);
        return view('reactions.edit', compact('reaction'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'user_id' => 'required',
            'avis_id' => 'required',
            'date_reaction' => 'required',
        ]);

        Reaction::whereId($id)->update($validatedData);

        return redirect()->route('reactions.index');
    }

//     public function destroyReaction($id)
// {
//     $reaction = Reaction::find($id);

//     if (!$reaction) {
//         return redirect()->route('reactions.index')->with('error', 'Réaction introuvable');
//     }

//     if ($reaction->user_id !== auth()->id()) {
//         return redirect()->route('reactions.index')->with('error', "Vous n'êtes pas autorisé à supprimer cette réaction");
//     }

//     $reaction->delete();

//     return redirect()->route('reactions.index')->with('success', 'Réaction supprimée avec succès');
// }

    public function destroy($id)
    {
        $reaction = Reaction::find($id);
        $reaction->delete();

        return redirect()->route('reactions.index');
    }

    public function react(Request $request, $avis_id)
    {
        $validatedData = $request->validate([
            'type' => 'required|in:adore,drole,en_colere,soutien,triste',
        ]);
    
        $user = auth()->user();
        $avis = Avis::find($avis_id);
    
        // Vérifie si l'utilisateur a déjà réagi à cet avis
        $existingReaction = Reaction::where('user_id', $user->id)
            ->where('avis_id', $avis->id)
            ->first();
    
        if ($existingReaction) {
            // L'utilisateur a déjà réagi à cet avis, stockez le message d'erreur dans la session
            session(["error_$avis_id" => 'Vous avez déjà réagi à cet avis.']);
            return redirect()->route('avis.index');
        }
    
        Reaction::create([
            'type' => $validatedData['type'],
            'user_id' => $user->id,
            'avis_id' => $avis_id,
            'date_reaction' => now(),
        ]);
    
        return redirect()->route('avis.index')->with('success', 'Réaction enregistrée avec succès.');
    }
    
    
}
