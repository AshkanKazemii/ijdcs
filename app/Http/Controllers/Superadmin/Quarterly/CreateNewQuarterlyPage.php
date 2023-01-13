<?php

namespace App\Http\Controllers\Superadmin\Quarterly;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateNewQuarterlyPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view("panels.super_admin.create-new-quarterly") ;
    }
}
