<?php

namespace App\Http\Controllers\ChiefEditor\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\ChiefEditor\ArticlesManagment\RejectionArticle as ArticlesManagmentRejectionArticle;
use Illuminate\Http\Request;

class RejectionArticle extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , ArticlesManagmentRejectionArticle $rejectionArticle)
    {
        $rejectionArticle($request->id) ;
        return redirect()->back() ;
    }
}
