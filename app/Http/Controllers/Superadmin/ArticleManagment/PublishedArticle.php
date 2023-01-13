<?php

namespace App\Http\Controllers\Superadmin\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\Superadmin\ArticleManagment\PublishedArticle as ArticleManagmentPublishedArticle;
use Illuminate\Http\Request;

class PublishedArticle extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , ArticleManagmentPublishedArticle $publishedArticle)
    {
        $publishedArticle($request) ;
        return redirect()->back() ;
    }
}
