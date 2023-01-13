<?php

namespace App\Repositories\ChiefEditor\ArticlesManagment;

use App\Models\ArticleApprovalsChiefEditor;
use App\Models\ArticleApprovalsReferee;
use App\Models\RefereesOpinion;
use App\Models\User;


class ApprovalArticle 
{

    public function __invoke($article_id)
    {
        $this->approvalArticle($article_id) ;
        $this->createRecordForSubmitArticleToRefereeOpinion($article_id) ;
        $this->createRecordForSubmitArticleToApprovalReferee($article_id) ;
    }


    private function approvalArticle($article_id)
    {
        return ArticleApprovalsChiefEditor::where("article_id" , $article_id)->update([ "is_confirmation" => true ]) ;
    }

    private function getReferees()
    {
        return User::where("role" , "referee")->get() ;
    }

    private function createRecordForSubmitArticleToRefereeOpinion($article_id)
    {
        $referees = $this->getReferees() ;
        foreach($referees as $referee){
            RefereesOpinion::create([
                "overall_quality" => "نظردهی نشده" ,
                "innovation" => "نظردهی نشده" ,
                "abstract_quality" => "نظردهی نشده" ,
                "resources_quality" => "نظردهی نشده" ,
                "principles_writing" => "نظردهی نشده" ,
                "conclusion_quality" => "نظردهی نشده" ,
                "presentation_quality" => "نظردهی نشده" ,
                "utilization_quality" => "نظردهی نشده" ,
                "general_opinion" => "نظردهی نشده" ,
                "general_description" => "نظردهی نشده" ,
                "score" => "نظردهی نشده" ,
                "article_id" => $article_id ,
            ]) ;
        }
    }


    private function getRefereeOpinion($article_id)
    {
        return RefereesOpinion::where("article_id" , "=" , $article_id)->get() ;
    }

    private function getChiefEditor($article_id)
    {
        return ArticleApprovalsChiefEditor::where("article_id" , $article_id)->first();
    }

    private function createRecordForSubmitArticleToApprovalReferee($article_id)
    {
        $get_referees = $this->getReferees() ;
        $refereeOpinion = $this->getRefereeOpinion($article_id) ;

        $counter = 0 ;

        foreach($refereeOpinion as $referee) {
            
            ArticleApprovalsReferee::create([
                "is_confirmation" => false , 
                "user_id" => $get_referees[$counter]->id , 
                "article_id" => $article_id , 
                "chiefeditor_id" => $this->getChiefEditor($article_id)->id , 
                "refereeopinion_id" => $referee->id , 
                "seen" => false , 
            ]) ;
            $counter++ ;
        }
    }
}
