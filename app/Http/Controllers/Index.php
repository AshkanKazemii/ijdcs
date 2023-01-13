<?php

namespace App\Http\Controllers;

use App\Repositories\GetQuarterly;
use App\Repositories\GetRolesJurnal;
use Illuminate\Http\Request;

class Index extends Controller
{

    public function __invoke(Request $request , GetQuarterly $getQuarterly , GetRolesJurnal $getRolesJurnal)
    {
        return view("index" , [
            "quarterlies" => $getQuarterly() , 
            "roles_jurnal" => $getRolesJurnal()
        ]) ;
    }
}
