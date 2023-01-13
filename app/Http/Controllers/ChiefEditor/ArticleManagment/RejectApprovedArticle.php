<?php

namespace App\Http\Controllers\ChiefEditor\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\ChiefEditor\ArticlesManagment\RejectApprovedArticle as ArticlesManagmentRejectApprovedArticle;
use Illuminate\Http\Request;

class RejectApprovedArticle extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , ArticlesManagmentRejectApprovedArticle $rejectApprovedArticle)
    {
        $rejectApprovedArticle($request->id) ;
        return redirect()->back() ;
    }
}
