<?php

namespace App\Repositories\Writer\ArticlesManagment ;

use App\Models\Article;

class GetOneArticleForEdition 
{
    public function __invoke($article_id)
    {
        return Article::find($article_id) ;
    }
}