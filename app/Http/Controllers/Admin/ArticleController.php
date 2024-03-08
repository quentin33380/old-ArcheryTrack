<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'source_url' => 'nullable|url',
            'categories' => 'nullable|array',
            'new_category' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        if (!empty($validatedData['new_category'])) {
            $newCategory = Category::firstOrCreate(['name' => $validatedData['new_category']]);
            $validatedData['categories'] = isset($validatedData['categories']) ? array_merge($validatedData['categories'], [$newCategory->id]) : [$newCategory->id];
        }

        $article = Article::create($validatedData);
        $article->categories()->sync($validatedData['categories'] ?? []);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully.');
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'source_url' => 'nullable|url',
            'categories' => 'nullable|array',
            'new_category' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        if (!empty($validatedData['new_category'])) {
            $newCategory = Category::firstOrCreate(['name' => $validatedData['new_category']]);
            $validatedData['categories'] = isset($validatedData['categories']) ? array_merge($validatedData['categories'], [$newCategory->id]) : [$newCategory->id];
        }

        $article->update($validatedData);
        $article->categories()->sync($validatedData['categories'] ?? []);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }
}

