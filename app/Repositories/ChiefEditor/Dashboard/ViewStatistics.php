<?php

namespace App\Repositories\ChiefEditor\Dashboard ;

use App\Models\Article;
use App\Models\ArticleApprovalsChiefEditor;
use App\Models\ArticleApprovalsReferee;

class ViewStatistics 
{
    public function __invoke()
    {
        return [
            "number_of_all_articles" => $this->numberOfAllArticles() , 
            "number_of_all_published_articles" => $this->numberOfAllPublishedArticles() ,
            "number_of_unverified_articles" => $this->numberOfUnverifiedArticles() ,
            "articles_awaiting_referee_approval" => $this->ArticlesAwaitingRefereeApproval() ,
        ];
    }

    private function numberOfAllArticles()
    {
        return Article::all()->count();
    }

    private function numberOfAllPublishedArticles()
    {
        return Article::where("failed" , "=" , 1)->count();
    }

    private function numberOfUnverifiedArticles()
    {
        return ArticleApprovalsChiefEditor::where("is_confirmation" , "=" , 0)->whereHas("article" , function($query){
            $query->where("failed" , "=" , "null");
        } ,"=")->count();
    }

    private function ArticlesAwaitingRefereeApproval()
    {
        return ArticleApprovalsChiefEditor::where("is_confirmation" , "=" , 1)->whereHas("chiefEditorArticleApprovalsReferee" , function($query){
            $query->where("is_confirmation" , "=" , 0);
        } ,"=")->count();
    }
}