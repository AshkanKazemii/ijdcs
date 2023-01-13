<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleApprovalsReferee extends Model
{
    use HasFactory;

    protected $fillable = [
        "is_confirmation" , 
        "user_id"  , 
        "article_id" , 
        "chiefeditor_id" , 
        "refereeopinion_id" ,
        "seen"
    ];

    public function user()
    {
        return $this->belongsTo(User::class , "user_id" , "id") ;
    }

    public function article()
    {
        return $this->belongsTo(Article::class , "article_id" , "id") ;
    }

    public function chiefEditor()
    {
        return $this->belongsTo(ArticleApprovalsChiefEditor::class , "chiefeditor_id" , "id") ;
    }

    public function refereeOpinion()
    {
        return $this->belongsTo(RefereesOpinion::class , "refereeopinion_id" , "id") ;
    }
}
