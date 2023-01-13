<?php


namespace App\Repositories\ChiefEditor\ArticlesManagment ;

use App\Models\ArticleApprovalsChiefEditor;



class SubmittedArticlesForApproval 
{
    public function __invoke()
    {
        return ArticleApprovalsChiefEditor::where("is_confirmation" , "=" , 0)->whereHas("article" , function($query){
            $query->where("failed" , "=" , "null");
        } ,"=")->get();
    }
}