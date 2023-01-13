<?php

namespace App\Http\Controllers\Writer\ArticlesManagment;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateArticleInformationRequest;
use App\Repositories\Writer\ArticlesManagment\SubmitEditedArticle as SubmitEditedArticleRepository ;

class SubmitEditedArticle extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ValidateArticleInformationRequest $validateArticleInformationRequest ,SubmitEditedArticleRepository $submitEditedArticle)
    {
        
        $article = $submitEditedArticle($validateArticleInformationRequest) ;
        $validateArticleInformationRequest->session()->flash("update-successfuly" , "مقاله {$article->title} با موفقیت ویرایش شد");
        return redirect()->route("writer.status-articles");
    }
}
