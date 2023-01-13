<?php

namespace App\Repositories\Superadmin\ArticleManagment ;

use App\Models\Article;

class PublishedArticle 
{
    
    public function __invoke($request)
    {
        return Article::where("id" , $request->id)->update([
            "failed" => "0" , 
            "quarterly_id" => $request->quarterly
        ]) ;
    }
}
