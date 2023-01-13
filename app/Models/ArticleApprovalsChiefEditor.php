<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleApprovalsChiefEditor extends Model
{
    use HasFactory;

    protected $fillable  = [
        "is_confirmation" , 
        "user_id" , 
        "article_id" , 
        "seen"
    ] ;

    public function user()
    {
        return $this->belongsTo(User::class , "user_id" , "id" ) ;
    }

    public function article()
    {
        return $this->belongsTo(Article::class  ,"article_id" , "id") ;
    }


    public function chiefEditorArticleApprovalsReferee()
    {
        return $this->hasMany(ArticleApprovalsReferee::class , "chiefeditor_id" , "id") ;
    }
}
