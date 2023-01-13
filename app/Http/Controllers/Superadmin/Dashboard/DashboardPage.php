<?php

namespace App\Http\Controllers\Superadmin\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\GetQuarterly;
use App\Repositories\Superadmin\RequestToPublishArticles;
use Illuminate\Http\Request;

class DashboardPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , RequestToPublishArticles $requestToPublishArticles , GetQuarterly $getQuarterly)
    {
        return view("panels.super_admin.index" , [
            "articles" => $requestToPublishArticles(), 
            "quarterlies" => $getQuarterly()
        ]);
    }
}
