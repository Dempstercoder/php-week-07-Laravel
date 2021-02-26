<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [     
            "name" => ["required", "string", "max:20"],       
            "type" => ["required", "string", "max:20"],
            "date_of_birth" => ["required", "string", "max:10"],
            "weight" => ["required", "string", "max:5"],
            "height" => ["string", "max:5"],
            "biteyness" => ["required", "string", "max:1"],
            "treatments" => ["required", "array"], // check treatments is an array
            "treatments.*" => ["string", "max:30"], // check members of treatments are,→ strings
            ];
            //
        
    }
}

