<?php

namespace App\Http\Controllers\Superadmin\Jurnal;

use App\Http\Controllers\Controller;
use App\Repositories\Superadmin\Jurnal\DeleteRoleJurnal as JurnalDeleteRoleJurnal;
use Illuminate\Http\Request;

class DeleteRoleJurnal extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , JurnalDeleteRoleJurnal $deleteRoleJurnal)
    {
        $deleteRoleJurnal($request->id);
        return redirect()->back() ;
    }
}
