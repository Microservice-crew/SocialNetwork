<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Commentaire;
use App\Http\Controllers\PostController;

use App\Models\Post;


class CommentaireController extends Controller
{
     public function index()
     {
         if (Auth::check()) {


            return view('home');

         } else {

            return view('login');
         }
     }

      public function create()
    {
        
        $commentaires = Commentaire::all(); // Retrieve all post
        return view('home', compact('commentaires'));
        //return view("/");
    }


    public function showPage()
    {
        $commentaires = Commentaire::all();
        return view('home', compact('commentaires'));
    }




    // CommentaireController.php

public function store(Request $request, Post $post)
    {
        $this->validate($request, [
            'content' => 'required',
        ]);

        $commentaire = new Commentaire([
            'content' => $request->input('content'),
        ]);

        $post->commentaires()->save($commentaire);

        return redirect()->back()->with('success', 'Commentaire ajouté avec succès.');
    }



}
