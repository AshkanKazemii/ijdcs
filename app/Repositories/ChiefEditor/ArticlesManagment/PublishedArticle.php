<?php

namespace App\Repositories\ChiefEditor\ArticlesManagment ;

use App\Models\Article;

class PublishedArticle 
{
    public function __invoke()
    {
        return Article::where("failed" , "=" , "0")->get() ;
    }
}