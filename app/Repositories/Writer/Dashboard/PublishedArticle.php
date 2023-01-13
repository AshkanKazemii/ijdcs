<?php



namespace App\Repositories\Writer\Dashboard ;

use App\Models\Article;
use App\Models\ArticleApprovalsChiefEditor;
use Illuminate\Support\Facades\Auth;

class PublishedArticle
{
    public function __invoke()
    {

        return Article::where("user_id" , Auth::user()->id)->where("failed" , "1")->get();
    }
}