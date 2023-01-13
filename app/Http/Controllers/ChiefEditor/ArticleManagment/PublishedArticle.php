<?php

namespace App\Http\Controllers\ChiefEditor\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\ChiefEditor\ArticlesManagment\PublishedArticle as ArticlesManagmentPublishedArticle;
use App\Repositories\ChiefEditor\Dashboard\ViewStatistics;
use Illuminate\Http\Request;

class PublishedArticle extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ArticlesManagmentPublishedArticle $publishedArticle , ViewStatistics $viewStatistics)
    {
        return view("panels.chief_editor.published-articles" , [
            "articles" => $publishedArticle() , 
            "number_of_unverified_articles" => $viewStatistics()["number_of_unverified_articles"]
        ]);
    }
}
