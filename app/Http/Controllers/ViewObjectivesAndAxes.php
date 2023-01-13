<?php

namespace App\Http\Controllers;

use App\Repositories\GetQuarterly;
use Illuminate\Http\Request;

class ViewObjectivesAndAxes extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , GetQuarterly $getQuarterly)
    {
        return view("objectives-and-axes" , [
            "quarterlies" => $getQuarterly()
        ]);
    }
}
