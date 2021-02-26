<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class OwnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {   // always return true
        // unless you add user logins
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {   // an array of validation rules for each submitted value
        return [
            "first_name" => ["required", "string", "max:100"],
            "last_name" => ["required", "string"],
            "address_1" => ["required", "string"],
            "address_2" => ["required", "string"],
            "town" => ["required", "string"],
            "postcode" => ["required", "string"],
            "email" => ["required", "string"],
        ];
    }
}
