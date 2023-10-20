<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
     public function index()
     {
         if (Auth::check()) {


            return view('home');




         } else {


            

            return view('login');
         }
     }
     


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $posts = Post::all(); // Retrieve all post
        return view('home', compact('posts'));
        //return view("/");
    }



    public function showziedPage()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }
    

    








    public function store(Request $request) {
        // 1. La validation
        $this->validate($request, [
            
            "content" => 'bail|required',
            "picture" => 'bail|required|image|max:1024',
        ]);
    
        // 2. On upload l'image dans "/storage/app/public/posts"
      //  $chemin_image = $request->picture->store("uploads");
  
             $newname= uniqid();
             $image = $request->file('picture');
             $newname.="." . $image->getClientOriginalExtension();
             $destinationpath = 'uploads';
             $image->move($destinationpath , $newname);


         $user = Auth::user();

             $user->posts()->create([
                 "content" => $request->content,
                 "picture" => $newname,
             ]);



        // 4. On retourne vers tous les posts : route("posts.index")
     
        return redirect('/');
    }



    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
  


    public function show(Post $post) {
        return view("home", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */  
    
     public function update(Request $request, Post $post)
     {
         // 1. Validation rules for updating
         $request->validate([
             "content" => 'bail|required',
             "picture" => 'bail|nullable|image|max:1024', // Allow null for updating without changing the picture
         ]);
     
         // 2. Handle the new picture (if provided)
         if ($request->hasFile('picture')) {
             $newname = uniqid();
             $image = $request->file('picture');
             $newname .= "." . $image->getClientOriginalExtension();
             $destinationPath = 'uploads';
             $image->move($destinationPath, $newname);
     
        
     
             // Update the post with the new picture
             $post->update([
                 "content" => $request->content,
                 "picture" => $newname,
             ]);
         } else {
             // Update the post without changing the picture
             $post->update([
                 "content" => $request->content,
             ]);
         }
     
         // 3. Redirect back to the post's details page or any other page as needed
         return redirect()->route('home', $post)->with('success', 'Post updated successfully.');
     }

         
    public function edit(Post $post)
    {
        // Display the edit form for the post
        return view('update', compact('post'));
     
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */

     public function destroy(Post $post)
     {
         // Delete the post from the database
         $post->delete();
     
         // Redirect back to the list of posts or any other page as needed
         return redirect('/')->with('success', 'Post deleted successfully.');
     }

 

     


}