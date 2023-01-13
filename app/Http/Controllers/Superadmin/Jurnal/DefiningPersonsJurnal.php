<?php

namespace App\Http\Controllers\Superadmin\Jurnal;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubmissionPersonJurnalRequest;
use App\Repositories\Superadmin\Jurnal\GetPersonsJurnal;
use App\Repositories\Superadmin\Jurnal\SubmissionPersonJurnal;
use Illuminate\Http\Request;

class DefiningPersonsJurnal extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(SubmissionPersonJurnalRequest $request , SubmissionPersonJurnal $submissionPersonJurnal )
    {
        $submissionPersonJurnal($request) ;
        return redirect()->back();
    }
}
