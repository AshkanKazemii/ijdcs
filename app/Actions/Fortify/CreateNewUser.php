<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        Validator::make($input, [
            'name_and_family' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),

            "university" => ['required', 'string', 'max:255'],
            "college" => ['required', 'string', 'max:255'] ,
            "field" => ['required', 'string', 'max:255'] ,
            "mobile" => ['required', 'string', 'max:255'] ,

        ])->validate();

        return User::create([
            'name_and_family' => $input['name_and_family'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),

            'university' => $input['university'],
            'college' => $input['college'],
            'field' => $input['field'],
            'mobile' => $input['mobile'],
            "permit" => false ,
            "role" => "writer"
        ]);
    }
}
