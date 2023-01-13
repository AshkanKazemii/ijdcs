<?php

namespace App\Repositories\Superadmin ;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateNewUser 
{
    public function __invoke($request)
    {
        return User::create([
            "name_and_family" => $request->email , 
            "email" => $request->email , 
            "password" => Hash::make($request->password) , 
            "role" => $request->role , 
        ]) ; 
    }
}