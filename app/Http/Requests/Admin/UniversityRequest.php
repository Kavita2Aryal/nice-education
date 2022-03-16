<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UniversityRequest extends FormRequest
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
            'logo'=> 'bail|nullable|file|max:2048|mimes:png,jpg,jpeg,webp',
            'country_id'=>'bail',
            'name' =>'required',
            'priority' => 'required',
            'status'   => 'bail|required|in:true,false,0,1',
        ];
    }
}
