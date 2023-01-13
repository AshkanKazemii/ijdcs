<?php

namespace App\Http\Controllers\Superadmin\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\Superadmin\ArticleManagment\PublishedArticleList;
use Illuminate\Http\Request;

class PublishedArticleListPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , PublishedArticleList $publishedArticleList)
    {
        return view("panels.super_admin.published-article-list" , [
            "articles" => $publishedArticleList()
        ]);
    }
}
