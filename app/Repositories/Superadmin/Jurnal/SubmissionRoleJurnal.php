<?php

namespace App\Repositories\Superadmin\Jurnal ;

use App\Models\RolesJurnal;

class SubmissionRoleJurnal
{
    public function __invoke($request)
    {
        return RolesJurnal::create([
            "role" => $request->role
        ]); 
    }
}