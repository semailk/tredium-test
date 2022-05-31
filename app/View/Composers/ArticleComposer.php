<?php

namespace App\View\Composers;

use App\Models\Article;
use Illuminate\View\View;

class ArticleComposer
{

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('articlesSlug', Article::all()->random(5));
    }
}
