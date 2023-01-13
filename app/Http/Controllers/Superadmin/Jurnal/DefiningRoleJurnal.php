<?php

namespace App\Http\Controllers\Superadmin\Jurnal;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubmissionRoleJurnalRequest;
use App\Repositories\Superadmin\Jurnal\SubmissionRoleJurnal;
use Illuminate\Http\Request;

class DefiningRoleJurnal extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(SubmissionRoleJurnalRequest $request , SubmissionRoleJurnal $submissionRoleJurnal)
    {
        $submissionRoleJurnal($request);
        return redirect()->back() ;
    }
}
