<?php


namespace App\Repositories\ChiefEditor\ArticlesManagment ;

use App\Models\ArticleApprovalsChiefEditor;
use App\Models\ArticleApprovalsReferee;


class ArticlesCommentedByReferees 
{
    public function __invoke()
    {
        return ArticleApprovalsChiefEditor::where("is_confirmation" , "=" , true)->get();  
    }
    
}