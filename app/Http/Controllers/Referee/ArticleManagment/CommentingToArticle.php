<?php

namespace App\Http\Controllers\Referee\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentingToArticleRequest;
use App\Repositories\Referee\ArticleManagment\CommentingToArticle as ArticleManagmentCommentingToArticle;

class CommentingToArticle extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CommentingToArticleRequest $request , ArticleManagmentCommentingToArticle $commentingToArticle)
    {
        $commentingToArticle($request , $request->id);
        return redirect()->route("referee.index");
    }
}
