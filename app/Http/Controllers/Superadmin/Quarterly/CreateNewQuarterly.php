<?php

namespace App\Http\Controllers\Superadmin\Quarterly;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatingQuarterlyByAdmin;
use App\Repositories\Superadmin\Quarterly\CreateNewQuarterly as QuarterlyCreateNewQuarterly;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class CreateNewQuarterly extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreatingQuarterlyByAdmin $request , QuarterlyCreateNewQuarterly $createNewQuarterly)
    {
        $createNewQuarterly($request);
        $request->session()->flash("create-quarterly" , "فصلنامه جدید با موفقیت ثبت شد");
        return redirect()->back() ;
    }
}
