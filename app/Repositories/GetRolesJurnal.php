<?php


namespace App\Repositories ;

use App\Models\RolesJurnal;

class GetRolesJurnal
{
    public function __invoke()
    {
        return RolesJurnal::all();
    }
}