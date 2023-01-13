<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use App\Actions\Fortify\PasswordValidationRules;

class CreatingUserByAdmin extends FormRequest
{
    use PasswordValidationRules ;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::user()->role === "superadmin") {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            "role" => "required|string"
        ];
    }


    public function messages()
    {
        return [
            "email.unique" => "این ایمیل قبلا در سیستم ثبت شده است",
            "email.required" => "لطفا فیلد ایمیل را پر کنید" ,  
            "role.required" => "لطفا فیلد مقام را پر کنید" ,  
            "password.required" => "لطفا فیلد رمز عبور را پر کنید" ,  
            "email.email" => "لطفا ساختار درست ایمیل را وارد کنید" ,  
            "email.max" => "لطفا در فیلد ایمیل داستان ننویسید"
        ];
    }
}
