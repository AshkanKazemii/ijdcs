<?php

namespace App\Http\Controllers\Superadmin\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\Superadmin\ArticleManagment\RejectedArticleList;
use Illuminate\Http\Request;

class RejectedArticleListPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , RejectedArticleList $rejectedArticleList)
    {
        return view("panels.super_admin.rejected-article-list" , [
            "articles" => $rejectedArticleList()
        ]);
    }
}
