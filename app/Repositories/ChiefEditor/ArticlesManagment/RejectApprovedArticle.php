<?php

namespace App\Repositories\ChiefEditor\ArticlesManagment ;

use App\Models\Article;
use App\Models\ArticleApprovalsChiefEditor;
use App\Models\ArticleApprovalsReferee;
use App\Models\RefereesOpinion;

class RejectApprovedArticle
{
    public $article_id ;
    public function __invoke($article_id)
    {
        $this->setArticleId($article_id);
        $this->updateIsConfirmationToFalseInArticleApprovalChiefEditorTable() ;
        $this->deleteRecordsRefereeOpinion();
    }
    
    private function setArticleId($article_id)
    {
        $this->article_id = $article_id ;
    }

    private function updateIsConfirmationToFalseInArticleApprovalChiefEditorTable()
    {
        return  ArticleApprovalsChiefEditor::where("article_id" , "=" , $this->article_id)->update(["is_confirmation" => false]); 
    }

    private function deleteRecordsRefereeOpinion()
    {
        return RefereesOpinion::where("article_id" , $this->article_id)->delete() ;
    }
}