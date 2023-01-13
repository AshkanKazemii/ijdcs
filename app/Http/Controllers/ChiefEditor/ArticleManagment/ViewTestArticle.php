<?php

namespace App\Http\Controllers\ChiefEditor\ArticleManagment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ShowArticle;

class ViewTestArticle extends Controller
{
    public function __invoke(Request $request , ShowArticle $showArticle)
    {
        return view("panels.chief_editor.view-test-article" , [
            "article" => $showArticle($request->id)
        ]);
    }
}
