<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AccueilControlleur extends Controller
{
    public function indexArticle()
    {
        $articles = Article::all();
        return view('accueil', compact('articles'));
    }
}
