<?php

namespace App\Repositories\Referee\Dashboard ;

use Illuminate\Support\Facades\Auth;
use App\Models\ArticleApprovalsReferee;

class DisplayArticlesForComment 
{
    public function __invoke()
    {
        return ArticleApprovalsReferee::where("user_id" , "=" , Auth::user()->id)->where("is_confirmation" , "=" , false)->get();
    }
}