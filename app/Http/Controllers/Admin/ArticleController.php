<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'source_url' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/articles'), $imageName);
            $validatedData['image'] = 'images/articles/' . $imageName;
        }

        Article::create($validatedData);

        return redirect()->route('admin.articles.index')->with('success', 'Article créé avec succès.');
    }


    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'source_url' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            if ($article->image && file_exists(public_path($article->image))) {
                unlink(public_path($article->image));
            }

            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/articles'), $imageName);
            $validatedData['image'] = 'images/articles/' . $imageName;
        }

        $article->update($validatedData);

        return redirect()->route('admin.articles.index')->with('success', 'Article modifié avec succès.');
    }


    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article supprimé avec succès.');
    }

}
