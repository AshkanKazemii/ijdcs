<?php

namespace App\Repositories\Superadmin ;

use App\Models\ArticleApprovalsChiefEditor;
use App\Models\ArticleApprovalsReferee;

class RequestToPublishArticles
{
 
    public function __invoke()
    {
        return ArticleApprovalsChiefEditor::where("is_confirmation" , "=" , true)->whereHas("article" , function($query){
            $query->where("failed" , "null") ;
        })->get();
    }

}