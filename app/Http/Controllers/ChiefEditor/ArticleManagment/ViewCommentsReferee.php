<?php

namespace App\Http\Controllers\ChiefEditor\ArticleManagment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ChiefEditor\ArticlesManagment\ViewCommentsReferee as ViewCommentsRefereeRepo;
use App\Repositories\ChiefEditor\Dashboard\ViewStatistics;

class ViewCommentsReferee extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , ViewCommentsRefereeRepo $viewCommentsReferee , ViewStatistics $viewStatistics)
    {
        return view("panels.chief_editor.view-comments-referees" , [
            "comments" => $viewCommentsReferee($request->id) , 
            "number_of_unverified_articles" => $viewStatistics()["number_of_unverified_articles"]
        ]);
    }
}
