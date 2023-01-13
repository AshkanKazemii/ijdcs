<?php

namespace App\Http\Controllers\Writer\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Writer\Dashboard\PublishedArticle;
use App\Repositories\Writer\Dashboard\StatusArticle;
use App\Repositories\Writer\Dashboard\ViewStatistics;
use Illuminate\Http\Request;

class DashboardPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(PublishedArticle $publishedArticle ,  ViewStatistics $viewStatistics)
    {
        return view("panels.writer.index" , [
            "published_articles" => $publishedArticle() , 
            "view_statistics" =>  $viewStatistics()
        ]) ;
    }
}
