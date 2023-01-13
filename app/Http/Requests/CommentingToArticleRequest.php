<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CommentingToArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return isset(Auth::user()->role) and Auth::user()->role == "referee" ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "overall_quality" => "string" ,
            "innovation" => "string" ,
            "abstract_quality" => "string" ,
            "resources_quality" => "string" ,
            "principles_writing" => "string" ,
            "conclusion_quality" => "string" ,
            "presentation_quality" => "string" ,
            "utilization_quality" => "string" ,
            "general_opinion" => "string" ,
            "general_description" => "required|string" ,
        ];
    }
}
