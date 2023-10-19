<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::all();

        return View::make('Article.index', compact('articles'));
    }

    public function create()
{
    return view('Article.create');
}
public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

   
    $article = new Article([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
           ]);

    $article->save();

    return redirect()->route('Article.index')->with('success', 'Article created successfully');
}

    public function edit($id)
{
    $article = Article::findOrFail($id);
    return view('Article.update', compact('article'));
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            
        ]);

        $article = Article::findOrFail($id);

        $article->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            
        ]);

        return redirect()->route('Article.index')->with('success', 'Article updated successfully!');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('Article.index')->with('success', 'Article deleted successfully!');
    }

    
}