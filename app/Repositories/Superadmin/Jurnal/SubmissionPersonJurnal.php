<?php

namespace App\Repositories\Superadmin\Jurnal ;

use App\Models\PersonsJurnal;
use App\Models\RolesJurnal;

class SubmissionPersonJurnal 
{
    public function __invoke($request)
    {
        return PersonsJurnal::create([
            "name" => $request->name  ,
            "role_id" => $this->getRoleJurnal($request->role)->id ,
            "job" =>  $request->job,
            "link" => $request->link
        ]) ;
    }

    private function getRoleJurnal($id)
    {
        return RolesJurnal::find($id) ;  
    }
}