<?php

namespace App\Http\Controllers\Superadmin\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\Superadmin\ArticleManagment\RejectedArticle as ArticleManagmentRejectedArticle;
use Illuminate\Http\Request;

class RejectedArticle extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , ArticleManagmentRejectedArticle $rejectedArticle)
    {
        $rejectedArticle($request->id) ;
        return redirect()->back() ;
    }
}
