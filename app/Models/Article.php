<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        "title" , 
        "lang" , 
        "keywords" , 
        "fa_abstract" , 
        "en_abstract" ,
        "file" ,
        "description" ,
        "resources" ,
        "user_id" , 
        "failed" ,
        "quarterly_id"
    ] ;


    public function user()
    {
        return $this->belongsTo(User::class , "user_id" , "id" );
    }

    public function articleApprovalsChiefEditors()
    {
        return $this->hasOne(ArticleApprovalsChiefEditor::class , "article_id" , "id"); 
    }

    public function articleApprovalsReferee()
    {
        return $this->hasMany(ArticleApprovalsReferee::class , "article_id" , "id") ;
    }

    public function refereeOpinions()
    {
        return $this->hasMany(RefereesOpinion::class , "article_id" , "id") ;
    }


    public function quarterly()
    {
        return $this->belongsTo(Quarterly::class , "quarterly_id" ,"id"); 
    }
}
