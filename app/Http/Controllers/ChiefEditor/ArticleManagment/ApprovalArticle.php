<?php

namespace App\Http\Controllers\ChiefEditor\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\ChiefEditor\ArticlesManagment\ApprovalArticle as ArticlesManagmentApprovalArticle;
use Illuminate\Http\Request;

class ApprovalArticle extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , ArticlesManagmentApprovalArticle $approvalArticle)
    {
        $approvalArticle($request->id) ;
        return redirect()->back() ;
    }
}
