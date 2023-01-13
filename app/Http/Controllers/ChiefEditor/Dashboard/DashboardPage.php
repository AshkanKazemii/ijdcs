<?php

namespace App\Http\Controllers\ChiefEditor\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ArticleApprovalsChiefEditor;
use App\Repositories\ChiefEditor\Dashboard\ViewPostedArticles;
use App\Repositories\ChiefEditor\Dashboard\ViewStatistics;

class DashboardPage extends Controller
{
    public function __invoke(ViewPostedArticles $viewPostedArticles , ViewStatistics $viewStatistics)
    {
        $view_posted_articles = $viewPostedArticles() ;
        $this->postedArticleHaveBeenSeen($view_posted_articles);
        return view("panels.chief_editor.index" , [
            "posted_articles" => $view_posted_articles, 
            "number_of_all_articles" => $viewStatistics()['number_of_all_articles'] , 
            "number_of_all_published_articles" => $viewStatistics()['number_of_all_published_articles'] ,
            "number_of_unverified_articles" => $viewStatistics()['number_of_unverified_articles'] ,
            "articles_awaiting_referee_approval" => $viewStatistics()['articles_awaiting_referee_approval'] ,
        ]);
    }

    private function postedArticleHaveBeenSeen($posted_articles) :void
    {
        foreach($posted_articles as $article){
            ArticleApprovalsChiefEditor::where("id" , "=" , $article->id)->update(["seen" => true]);
        }
    }
}
