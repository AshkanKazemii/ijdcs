<?php

namespace App\Repositories\Referee\ArticleManagment ;

use App\Models\Article;

class GetArticleForCommenting
{
    public function __invoke($article_id)
    {
        return Article::find($article_id) ;
    }
}