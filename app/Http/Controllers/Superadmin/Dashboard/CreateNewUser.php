<?php

namespace App\Http\Controllers\Superadmin\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatingUserByAdmin;
use App\Repositories\Superadmin\CreateNewUser as SuperadminCreateNewUser;
use Illuminate\Http\Request;

class CreateNewUser extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreatingUserByAdmin $request , SuperadminCreateNewUser $createNewUser)
    {
        $createNewUser($request);
        $request->session()->flash("create-user" , "کاربر مورد نظر با موفقیت ساخته شد");
        
        return redirect()->back() ;
    }
}
