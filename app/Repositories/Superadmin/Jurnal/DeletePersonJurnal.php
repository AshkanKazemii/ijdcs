<?php

namespace App\Repositories\Superadmin\Jurnal ;

use App\Models\PersonsJurnal;

class DeletePersonJurnal 
{
    public function __invoke($personId)
    {
        return PersonsJurnal::where("id" , $personId)->delete() ;
    }
}