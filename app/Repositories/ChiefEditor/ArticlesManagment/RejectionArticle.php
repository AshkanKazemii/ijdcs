<?php

namespace App\Repositories\ChiefEditor\ArticlesManagment ;

use App\Models\Article;


class RejectionArticle
{
    public function __invoke($article_id)
    {
        return Article::where("id" , $article_id)->update(["failed" => 1]);
    }
}
