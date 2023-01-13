<?php

namespace App\Repositories\Superadmin\Jurnal ;

use App\Models\RolesJurnal;

class DeleteRoleJurnal
{
    public function __invoke($roleId)
    {
        return RolesJurnal::where("id" , $roleId)->delete();
    }
}