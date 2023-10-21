<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Group;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;


class ArticleController extends Controller
{

    public function index()
{
    $articles = Article::with('group')->get(); // Eager load the associated group
    return view('Article.index', compact('articles'));
}

// public function indexx()
// {
//     $articles = Article::all();
//     return view('Article.frontArticle', compact('articles'));
// }

public function showByGroup($groupId)
{
    $articles = Article::where('group_id', $groupId)->get();
    return view('Article.frontArticle', compact('articles'));
}


  public function create()
{
    $groups = Group::all(); // Fetch all groups from the Group model
    return view('Article.create', compact('groups'));
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'group_id' => 'required', 
    ]);

    $article = new Article([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
        'group_id' => $request->input('group_id'), 
    ]);

    $article->save();

    return redirect()->route('Article.index')->with('success', 'Article created successfully');
}


public function edit($id)
{
    $article = Article::findOrFail($id);
    $groups = Group::all(); // Fetch all groups from the Group model
    return view('Article.update', compact('article', 'groups'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'content' => 'required',
        'group_id' => 'required', 
    ]);

    $article = Article::findOrFail($id);

    $article->update([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
        'group_id' => $request->input('group_id'), 
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