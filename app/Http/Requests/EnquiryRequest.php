<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryRequest extends FormRequest
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
            'first_name'=>'required',
            'last_name' =>'required',
            'email_address' =>'required',
            'mobile_number' =>'required',
            'question_about' =>'bail|nullable|array',
            'preferred_country' =>'bail|nullable|array',
            'question' =>'required'
        ];
    }
}
