<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::query()->orderByDesc('created_at')->paginate(10);
        $url = 'articles';

        return view('articles', compact('articles', 'url'));
    }

    public function show($slug)
    {
        $article = Article::slug($slug)->first();
        $url = 'article/show';

        return view('article', compact('article', 'url'));
    }
}
