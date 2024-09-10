<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class FrontendArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article', compact('articles'));
    }
}
