<?php

namespace App\Http\Controllers\Superadmin\Jurnal;

use App\Http\Controllers\Controller;
use App\Repositories\Superadmin\Jurnal\GetRoles;
use Illuminate\Http\Request;

class DefiningRoleJurnalPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , GetRoles $getRoles)
    {
        return view("panels.super_admin.defining-role-jurnal" , [
            "roles" => $getRoles()
        ]);
    }
}
