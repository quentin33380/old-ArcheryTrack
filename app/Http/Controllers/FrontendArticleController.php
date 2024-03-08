<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class FrontendArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::query();

        if ($request->filled('type_darc')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->whereIn('name', $request->type_darc);
            });
        }

        $articles = $query->get();

        return view('articles', compact('articles'));
    }
}
