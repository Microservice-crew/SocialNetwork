<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use App\Models\ReponseReclamation;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;


class ReponseReclamationController extends Controller
{
    public function index()
    {
        $reclamations = Reclamation::all();

        return View::make('reclamation.listReclamationAdmin', compact('reclamations'));
    }

    public function store(Request $request, Reclamation $reclamation)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        // Create a new reply associated with the reclamation
        $reply = new ReponseReclamation([
            'content' => $request->input('content'),
        ]);

        $reclamation->replies()->save($reply);

        return redirect()->back()->with('success', 'Reply added successfully.');
    }

}
