<?php

namespace App\Http\Controllers\ChiefEditor\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\ChiefEditor\ArticlesManagment\SubmittedArticlesForApproval;
use App\Repositories\ChiefEditor\Dashboard\ViewStatistics;
use Illuminate\Http\Request;

class ViewSubmittedArticlesForApprovalPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(SubmittedArticlesForApproval $submittedArticlesForApproval , ViewStatistics $viewStatistics)
    {
        return view("panels.chief_editor.view-submitted-articles-for-approval" , [
            "articles" => $submittedArticlesForApproval() , 
            "number_of_unverified_articles" => $viewStatistics()["number_of_unverified_articles"]
        ]);
    }
}
