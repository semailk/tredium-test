<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;

class ArticleController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $articles = Article::query()->orderByDesc('created_at')->paginate(10);
        $url = 'articles';

        return view('articles', compact('articles', 'url'));
    }

    /**
     * @param $slug
     * @return View
     */
    public function show($slug): View
    {
        $article = Article::slug($slug)->first();
        $url = 'article/show';

        return view('article', compact('article', 'url'));
    }
}
