<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Articles::all();
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
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'source_url' => 'sometimes|url',
            'categories' => 'sometimes|array',
        ]);

        // Gérer l'upload de l'image
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        // Encoder les catégories en JSON si nécessaire
        if (isset($validatedData['categories'])) {
            $validatedData['categories'] = json_encode($validatedData['categories']);
        }

        Articles::create($validatedData);

        return redirect()->route('admin.articles.index')->with('success', 'Article créé avec succès.');
    }

    public function edit(Articles $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Articles $article){
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'source_url' => 'sometimes|url',
            'categories' => 'sometimes|array',
        ]);

        // Gérer l'upload de l'image
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        // Encoder les catégories en JSON si nécessaire
        if (isset($validatedData['categories'])) {
            $validatedData['categories'] = json_encode($validatedData['categories']);
        }

        $article->update($validatedData);

        return redirect()->route('admin.articles.index')->with('success', 'Article modifié avec succès.');
    }

    public function destroy(Articles $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article supprimé avec succès.');
    }

}
