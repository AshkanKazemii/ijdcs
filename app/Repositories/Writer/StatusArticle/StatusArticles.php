<?php


namespace App\Repositories\Writer\StatusArticle ;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class StatusArticles 
{
    public function __invoke()
    {
        return Article::where("user_id" , Auth::user()->id)->get() ;
    }
}