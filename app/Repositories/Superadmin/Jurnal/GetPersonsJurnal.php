<?php

namespace App\Repositories\Superadmin\Jurnal ;

use App\Models\PersonsJurnal;

class GetPersonsJurnal 
{
    public function __invoke()
    {
        return PersonsJurnal::orderBy("id" , "DESC")->get();
    }
}