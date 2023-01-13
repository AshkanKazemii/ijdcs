<?php

namespace App\Http\Controllers\Writer\ArticlesManagment;

use App\Http\Controllers\Controller;
use App\Repositories\Writer\ArticlesManagment\GetOneArticleForEdition;
use Illuminate\Http\Request;

class EditArticlePage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , GetOneArticleForEdition $getOneArticleForEdition)
    {
        $article = $getOneArticleForEdition($request->id) ;

        if($article->articleApprovalsChiefEditors->is_confirmation == 1)
        {
            return abort(404) ;
        }
        return view("panels.writer.edit-article" , [
            "article" => $article
        ]);
    }
}
