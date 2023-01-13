<?php


namespace App\Repositories\ChiefEditor\ArticlesManagment ;

use App\Models\ArticleApprovalsChiefEditor;

class ApprovedArticles 
{
    public function __invoke()
    {
        return ArticleApprovalsChiefEditor::where("is_confirmation" , "=" , "1")->whereHas("chiefEditorArticleApprovalsReferee" , function($query){
            $query->where("is_confirmation" , "=" , 0) ;
        })->get();
    }
}