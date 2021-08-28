<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name'=>"required|string",
            'fathername'=>"required|string",
            'birth'=>"required|string",
            'degree'=>"string",
            'user_type'=>"required|string",
            'address'=>"string",
            'distance'=>'numeric',
            'mobile'=>"required|string|starts_with:09",
            'phone'=>"numeric",
            'national_id'=>"required|string|min:10|max:10",
            "password"=>"required|min:8",
            "re_password"=>"required|same:password",
            'office_id'=>'required|numeric'
        ];
    }
}
