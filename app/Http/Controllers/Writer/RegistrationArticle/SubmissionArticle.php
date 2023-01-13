<?php

namespace App\Http\Controllers\Writer\RegistrationArticle;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubmissionArticleRequest;
use App\Models\ArticleApprovalsChiefEditor;
use App\Repositories\Writer\SendArticleToChiefEditor;
use App\Repositories\Writer\SubmissionArticle as WriterSubmissionArticle;
use Illuminate\Http\Request;

class SubmissionArticle extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(SubmissionArticleRequest $request , WriterSubmissionArticle $writerSubmissionArticle , SendArticleToChiefEditor $sendArticleToChiefEditor)
    {
        $is_confirm = $writerSubmissionArticle($request);

        if($is_confirm){
            $sendArticleToChiefEditor($is_confirm);
            $request->session()->flash("submission_article" , "مقاله با موفقیت ثبت شد . در قسمت مدیریت مقاله از وضعیت تاییدیه مقاله خود با خبر شوید");

        } else {
            $request->session()->flash("submission_article" , "در ثبت مقاله مشکلی رخ داده . لطفا مجددا تلاش کنید");
        }
                
        return redirect()->back();
        
    }


}
