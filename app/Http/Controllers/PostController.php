<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hello world
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


        // 3. On enregistre les informations du Post
        Post::create([
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
        //
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
     
     public function edit(Post $post)
{
    // Display the edit form for the post
    return view('update', compact('post'));
 
}


     public function updatez(Request $request, Post $post)
     {
         $request->validate([
             'content' => 'required|string',
             'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
         ]);
     
         // Update the post's content
         $post->content = $request->input('content');
     
         // Update the post's picture if a new one is provided
         if ($request->hasFile('picture')) {
             $newname = uniqid() . '.' . $request->file('picture')->getClientOriginalExtension();
             $request->file('picture')->storeAs('public/uploads', $newname);
             $post->picture = $newname;
         }
     
         $post->save();
     
         // Redirect back to the list of posts or any other page as needed
         return redirect()->route('home')->with('success', 'Post updated successfully.');
     }
     


}
