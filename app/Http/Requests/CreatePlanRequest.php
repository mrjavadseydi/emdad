<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlanRequest extends FormRequest
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
            'executor_id'=>'required',
            'user_id'=>'required',
            'group'=>'required',
            'title'=>'required',
            'type'=>'required',
            'source'=>'required',
            'bank'=>'required',
            'date'=>'required',
            'code'=>'required',
            'space'=>'required',
            'employment'=>'required',
            'executer_fund'=>'required',
            'summery'=>'required',
            'fund'=>'required',
            'executer_summery'=>'required',
            'skillType'=>'array|nullable',
            'skillValue'=>'array|nullable',
            'metaType'=>'array|nullable',
            'metaValue'=>'array|nullable',
            'metaActive'=>'array|nullable'
        ];
    }
}
