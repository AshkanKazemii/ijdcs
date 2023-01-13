<?php

namespace App\Repositories\Superadmin\ArticleManagment ;

use App\Models\Article;


class RejectedArticle 
{
    
    public function __invoke($article_id)
    {
        return Article::where("id" , $article_id)->update([
            "failed" => 1
        ]) ;
    }
}
