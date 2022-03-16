<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'image'         => 'bail|nullable|file|max:2048|mimes:png,jpg,jpeg,webp',
            'title'         =>'required',
            'section_title' =>'required',
            'slug'          =>'required',
            'description'   =>'required'
        ];
    }
}
