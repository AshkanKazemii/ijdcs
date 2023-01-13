<?php

namespace App\Repositories ;

use App\Models\User;

class GetReferees
{
    public function __invoke()
    {   
        return User::where("role" , "referee")->get();
    }
}