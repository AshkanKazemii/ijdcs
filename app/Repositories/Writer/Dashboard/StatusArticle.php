<?php



namespace App\Repositories\Writer\Dashboard ;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class StatusArticle
{
    
    public function __invoke()
    {
        return [
            "getNumberOfFailedArticles" => $this->getNumberOfFailedArticles() , 
            "getNumberOfPublishedArticles" => $this->getNumberOfPublishedArticles(),
            "getNumberOfPendingArticles" => $this->getNumberOfPendingArticles(), 
        ];
    }

    private function getNumberOfFailedArticles()
    {
        return Article::where("user_id" , Auth::user()->id)->where("failed" , "0")->get();
    } 

    private function getNumberOfPublishedArticles()
    {
        return Article::where("user_id" , Auth::user()->id)->where("failed" , "1")->get();
    }

    private function getNumberOfPendingArticles()
    {
        return Article::where("user_id" , Auth::user()->id)->where("failed" , "null")->get();
    }
}