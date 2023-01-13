<?php

namespace App\Repositories\ChiefEditor\ArticlesManagment ;

use App\Models\ArticleApprovalsReferee;

class ViewCommentsReferee
{
    public function __invoke($article_id)
    {
        return ArticleApprovalsReferee::where("article_id", "=" , $article_id)->get();
    }
}