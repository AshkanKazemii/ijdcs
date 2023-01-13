<?php


namespace App\Repositories ;

use App\Models\Quarterly;

class GetQuarterly
{
    public function __invoke()
    {
        return  Quarterly::where("id" , "!=" , 1)->latest()->limit(3)->get();
    }
}