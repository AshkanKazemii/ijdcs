<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\GetQuarterly;
use App\Repositories\GetRolesJurnal;
use App\Repositories\ShowArticle as RepositoriesShowArticle;

class ShowArticle extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , RepositoriesShowArticle $showArticle , GetQuarterly $getQuarterly , GetRolesJurnal $getRolesJurnal)
    {
        return view("article" , [
            "article" => $showArticle($request->id) , 
            "quarterlies" => $getQuarterly() ,
            "roles_jurnal" => $getRolesJurnal()
        ]);
    }
}
