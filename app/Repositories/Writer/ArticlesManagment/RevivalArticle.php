<?php

namespace App\Repositories\Writer\ArticlesManagment ;

use App\Models\Article;
use App\Models\ArticleApprovalsChiefEditor;
use App\Models\ArticleApprovalsReferee;
use App\Models\RefereesOpinion;

class RevivalArticle{

    private $article_id ;
    private function checkFailedArticle($article_id)
    {
        $this->article_id = $article_id ;
        return Article::find($article_id)->failed ;
    }

    protected function revivalArticle($article_id)
    {
        if($this->checkFailedArticle($article_id) == 0) // published
        {
            $this->disableArticle() ;
            $this->resetConfirmationChiefeditor() ;
            $this->deleteApprovalReferees();
            $this->deleteRefereeOpinion();

        } elseif($this->checkFailedArticle($article_id) == 1) // unpublished
        {
            $this->disableArticle() ;
            $this->resetConfirmationChiefeditor() ;
            $this->deleteApprovalReferees();
            $this->deleteRefereeOpinion();
        } elseif($this->checkFailedArticle($article_id) == "null") 
        {
            return ;
        }
    }

    private function disableArticle()
    {
        return Article::where("id" , $this->article_id)->update([
            "failed" => "null"
        ]) ;
    }

    private function resetConfirmationChiefeditor()
    {
        return ArticleApprovalsChiefEditor::where("article_id" , $this->article_id)->update([
            "is_confirmation" => 0 
        ]) ;
    }

    private function deleteApprovalReferees()
    {
        return ArticleApprovalsReferee::where("article_id" , $this->article_id)->delete() ;
    }

    private function deleteRefereeOpinion()
    {
        return RefereesOpinion::where("article_id" , $this->article_id)->delete() ;
    }

    

    


    // private function getReferees()
    // {
    //     return ArticleApprovalsReferee::where("article_id" , $this->article_id)->get() ;
    // }   

    // private function revivalRefereeOpinion()
    // {
    //     foreach($this->getReferees() as $approval_referee)
    //     {
    //         $this->deleteRefereeOpinion($approval_referee->refereeopinion_id) ;
    //         $opinion = $this->createRefereeOpinion($approval_referee->article_id);
    //         $this->createRefereeOpinionIdInArticleApprovalRefereeTable($approval_referee , $opinion) ;
    //     }
    // }
    
    // private function deleteRefereeOpinion($referee_opinion_id)
    // {
    //     return RefereesOpinion::where("id" , $referee_opinion_id)->delete() ;
    // }

    // private function createRefereeOpinion($article_id)
    // {
    //     return RefereesOpinion::create([
    //         "overall_quality" => "نظردهی نشده" ,
    //         "innovation" => "نظردهی نشده" ,
    //         "abstract_quality" => "نظردهی نشده" ,
    //         "resources_quality" => "نظردهی نشده" ,
    //         "principles_writing" => "نظردهی نشده" ,
    //         "conclusion_quality" => "نظردهی نشده" ,
    //         "presentation_quality" => "نظردهی نشده" ,
    //         "utilization_quality" => "نظردهی نشده" ,
    //         "general_opinion" => "نظردهی نشده" ,
    //         "general_description" => "نظردهی نشده" ,
    //         "score" => "نظردهی نشده" ,
    //         "article_id" => $article_id ,
    //     ]) ;
    // }

    // private function createRefereeOpinionIdInArticleApprovalRefereeTable($approval_referee , $opinion)
    // {
    //     return ArticleApprovalsReferee::create([
    //         "is_confirmation" => 0 ,
    //         "user_id" => $approval_referee->user_id ,
    //         "article_id" => $approval_referee->article_id ,
    //         "chiefeditor_id" => $approval_referee->chiefeditor_id ,
    //         "refereeopinion_id" => $opinion->id , 
    //         "seen" => 0 ,
    //     ]) ;
    // }




    
}