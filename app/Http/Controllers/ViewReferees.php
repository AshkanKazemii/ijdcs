<?php

namespace App\Http\Controllers;

use App\Repositories\GetQuarterly;
use App\Repositories\GetReferees;
use Illuminate\Http\Request;

class ViewReferees extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , GetQuarterly $getQuarterly , GetReferees $getReferees)
    {
        return view("referees" , [
            "quarterlies" => $getQuarterly(), 
            "referees" => $getReferees()
        ]);
    }
}
