<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Commentaire;


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
    $commentaires = new Commentaire();
    $commentaires->content = $request->input('content'); // Change 'body' to 'content'
    $post->commentaires()->save($commentaires);

    return redirect('/');
}




}
