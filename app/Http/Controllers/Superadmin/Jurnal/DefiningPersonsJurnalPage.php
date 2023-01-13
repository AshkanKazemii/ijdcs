<?php

namespace App\Http\Controllers\Superadmin\Jurnal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Superadmin\Jurnal\GetRoles;
use App\Repositories\Superadmin\Jurnal\GetPersonsJurnal;

class DefiningPersonsJurnalPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , GetRoles $getRoles  , GetPersonsJurnal $getPersonsJurnal)
    {
        return view("panels.super_admin.defining-persons-jurnal" , [
            "roles" => $getRoles() , 
            "persons" => $getPersonsJurnal()
        ]);
    }
}
