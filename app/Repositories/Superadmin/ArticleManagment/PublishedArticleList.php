<?php

namespace App\Repositories\Superadmin\ArticleManagment ;

use App\Models\Article;

class PublishedArticleList
{
    public function __invoke()
    {
        return Article::where("failed" , "=" , "0")->get() ;
    }
}