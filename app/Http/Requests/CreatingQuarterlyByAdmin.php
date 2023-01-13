<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreatingQuarterlyByAdmin extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        if(Auth::user()->role === "superadmin") {
            return true ;
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
            "name" => "required|string" ,
            "file" => "required|mimes:png,jpg,jpeg|max:2048" ,
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "لطفا فیلد مورد نظر را پر کنید" ,
            "file.required" => "لطفا فیلد مورد نظر را پر کنید" ,
            "file.mimes" => "لطفا تصویر با فرمت های png , jpg , jpeg  را وارد کنید" ,
            "file.max" => "لطفا تصویری را حجم کمتر از 2 مگابایت را اپلود کنید" ,
        ] ;
    }
}
