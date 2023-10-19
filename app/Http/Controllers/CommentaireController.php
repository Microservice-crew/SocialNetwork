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



public function destroy(Commentaire $commentaire)
{
    $commentaire->delete();
     return redirect('/')->with('success', 'Commentaire deleted successfully.');
}




     public function update(Request $request, Commentaire $commentaire)
     {
         // 1. Validation rules for updating
         $request->validate([
             "content" => 'bail|required',
             
         ]);
  
             $commentaire->update([
                 "content" => $request->content,
             ]);
        
         // 3. Redirect back to the post's details page or any other page as needed
         return redirect()->route('home', $commentaire)->with('success', 'Commentaire updated successfully.');
     }

         
    public function edit(Commentaire $commentaire)
    {
        // Display the edit form for the post
        return view('updateCommentaire', compact('commentaire'));
     
    }






}
