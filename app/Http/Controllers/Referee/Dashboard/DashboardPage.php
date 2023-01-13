<?php

namespace App\Http\Controllers\Referee\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Referee\Dashboard\DisplayArticlesForComment;
use Illuminate\Http\Request;

class DashboardPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , DisplayArticlesForComment $displayArticlesForComment)
    {
        return view("panels.referee.index" , [
            "articles" => $displayArticlesForComment()
        ]);
    }
}
