<?php

namespace App\Http\Controllers\ChiefEditor\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\ChiefEditor\ArticlesManagment\ApprovedArticles as ArticlesManagmentApprovedArticles;
use App\Repositories\ChiefEditor\Dashboard\ViewStatistics;
use Illuminate\Http\Request;

class ApprovedArticles extends Controller
{
    public function __invoke(ArticlesManagmentApprovedArticles $approvedArticles , ViewStatistics $viewStatistics)
    {
        return view("panels.chief_editor.approved-articles" , [
            "articles" => $approvedArticles() , 
            "number_of_unverified_articles" => $viewStatistics()["number_of_unverified_articles"]
        ]);
    }
}
