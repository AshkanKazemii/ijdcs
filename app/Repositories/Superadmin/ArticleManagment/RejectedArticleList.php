<?php

namespace App\Repositories\Superadmin\ArticleManagment ;

use App\Models\Article;



class RejectedArticleList
{
    public function __invoke()
    {
        return Article::where("failed" , "1")->get() ;
    }
}