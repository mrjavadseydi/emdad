<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOfficeRequest extends FormRequest
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
            'province_id'=>"required|numeric",
            'city_id'=>"required|numeric",
            'state_id'=>"required|numeric",
            'name'=>"required|string",
            'code'=>"required|numeric",
            'address'=>"required|string",
            'phone'=>"required|numeric",
            'address_office'=>"required|string",
            'phone_office'=>"required|numeric",
            'boss_name'=>"required|string",
            'employment_name'=>"required|string"
        ];
    }
}
