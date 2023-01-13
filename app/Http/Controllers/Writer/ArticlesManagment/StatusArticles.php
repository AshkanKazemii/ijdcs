<?php

namespace App\Http\Controllers\Writer\ArticlesManagment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Writer\StatusArticle\StatusArticles as WriterStatusArticles;

class StatusArticles extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(WriterStatusArticles $statusArticles)
    {
    
        return view("panels.writer.status-articles" , [
            "articles" => $statusArticles()
        ]);
    }
}
