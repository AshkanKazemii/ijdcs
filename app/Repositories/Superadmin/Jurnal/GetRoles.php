<?php

namespace App\Repositories\Superadmin\Jurnal ;

use App\Models\RolesJurnal;

class GetRoles 
{
    public function __invoke()
    {
        return RolesJurnal::orderBy("id" , "DESC")->get();
    }
}