<?php

namespace App\Http\Controllers\Referee\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\Referee\ArticleManagment\GetArticleForCommenting;
use Illuminate\Http\Request;

class CommentingToArticlePage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , GetArticleForCommenting $getArticleForCommenting)
    {
        return view("panels.referee.commenting-to-article" , [
            "article" => $getArticleForCommenting($request->id)
        ]);
    }
}
