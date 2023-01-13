<?php

namespace App\Http\Controllers\ChiefEditor\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\ChiefEditor\ArticlesManagment\ArticlesCommentedByReferees as ArticlesManagmentArticlesCommentedByReferees;
use App\Repositories\ChiefEditor\Dashboard\ViewStatistics;
use Illuminate\Http\Request;

class ArticlesCommentedByReferees extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , ArticlesManagmentArticlesCommentedByReferees $articlesCommentedByReferees , ViewStatistics $viewStatistics)
    {
        return view("panels.chief_editor.articles-commented-by-referees" , [
            "articles" => $articlesCommentedByReferees() , 
            "number_of_unverified_articles" => $viewStatistics()["number_of_unverified_articles"]
        ]);
    }
}
