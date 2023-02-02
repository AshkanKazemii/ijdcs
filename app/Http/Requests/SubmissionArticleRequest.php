<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return (Auth::user()->permit) ? true : false;
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|string" , 
            "lang" => "required|string" , 
            "keywords" => "required|string" , 
            "fa_abstract" => "required|string" , 
            "en_abstract" => "required|string" , 
            "resources" => "required|string" , 
            "description" => "required|string" , 
            "file" => "required|mimes:pdf"
        ];
    }
}
