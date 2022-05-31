<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $articles = Article::query()->orderByDesc('created_at')->paginate(6);
        $url = '/';

        return view('welcome', compact('articles', 'url'));
    }
}
