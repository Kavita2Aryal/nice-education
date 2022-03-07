<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VisaAcceptanceRequest extends FormRequest
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
            'background_image'=> 'required|nullable|file|max:2048|mimes:png,jpg,jpeg,webp',
            'image'=> 'required|nullable|file|max:2048|mimes:png,jpg,jpeg,webp',
            'name'=>'required',
            'country' =>'required',
            'exam_score' =>'required'
        ];
    }
}
