<?php

namespace App\Repositories\ChiefEditor\ArticlesManagment ;

use App\Models\ArticleApprovalsReferee;

class ApprovalArticleByCheifEditor 
{
    public function __invoke($article_id , $user_id)
    {
        return ArticleApprovalsReferee::where("user_id" , "=" , $user_id)->where("article_id" , "=" , $article_id)->update(["is_confirmation" => true]) ;
    }
}