<?php

namespace App\Repositories\Referee\ArticleManagment ;

use App\Models\ArticleApprovalsReferee;
use App\Models\RefereesOpinion;
use Illuminate\Support\Facades\Auth;

class CommentingToArticle
{

    public function __invoke($request)
    {
       
        $this->updateAndRegisterComments($request , $request->id);
        $this->updateIsConfirmationInArticleApprovalRefereeTable($request->id);
    }

    private $score = [
        "good" => 1 ,
        "acceptable" => 0 , 
        "rejection" => -1
    ] ;

    private function updateAndRegisterComments($request , $article_id)
    {
        $score = $this->articleScoreCalculation($request) ;

        return  RefereesOpinion::where("article_id" , $article_id)->whereHas("OpinionArticleApprovalsReferee" , function($query){
                    $query->where("user_id" , Auth::user()->id);
                })->update([
                    "overall_quality" => $request->overall_quality ,
                    "innovation" => $request->innovation ,
                    "abstract_quality" => $request->abstract_quality ,
                    "resources_quality" => $request->resources_quality ,
                    "principles_writing" => $request->principles_writing ,
                    "conclusion_quality" => $request->conclusion_quality ,
                    "presentation_quality" => $request->presentation_quality ,
                    "utilization_quality" => $request->utilization_quality ,
                    "general_opinion" => $request->general_opinion ,
                    "general_description" => $request->general_description ,
                    "score" => $score ,
                ]);
    }

    private function articleScoreCalculation($request)
    {
        $scores = 0 ;
        foreach($request->all() as $key => $score)
        {
            if($key == "_token" or $key == "general_description") continue ;
            $scores += $this->score[$score] ;
        }

        return $scores ;
    }

    private function updateIsConfirmationInArticleApprovalRefereeTable($article_id)
    {
        return ArticleApprovalsReferee::where("user_id" , Auth::user()->id)->where("article_id" , $article_id)->update([
            "is_confirmation" => true 
        ]) ;
    }
}