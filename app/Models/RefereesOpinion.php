<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefereesOpinion extends Model
{
    use HasFactory;

    protected $fillable = [
        "overall_quality", 
        "innovation", 
        "abstract_quality", 
        "resources_quality", 
        "principles_writing", 
        "conclusion_quality", 
        "presentation_quality", 
        "utilization_quality", 
        "general_opinion", 
        "general_description", 
        "score" , 
        "article_id"
    ] ;

    public function OpinionArticleApprovalsReferee()
    {
        return $this->hasOne(ArticleApprovalsReferee::class , "refereeopinion_id" , "id") ;
    }

    public function article()
    {
        return $this->belongsTo(Article::class , "article_id" , "id") ;
    }
}
