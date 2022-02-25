<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TestPreparationRequest extends FormRequest
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
        $modelId = last(request()->segments());
        return [
            'title'                => 'bail|required|string|max:200',
            'slug'                 => 'bail|required|string|unique:test_preparations,slug,' . $modelId,
            'document'             => 'bail|nullable|file|max:2048|mimes:pdf',
            'banner_image'         => 'bail|nullable|file|max:2048|mimes:png,jpg,jpeg,webp',

            'overview_title'       => 'bail|required|string|max:200',
            'overview_description' => 'bail|required',
            'overview_image'       => 'bail|nullable|file|max:2048|mimes:png,jpg,jpeg,webp',

            'preparation_title'          => 'bail|required|string',
            'preparation_description'    => 'bail|required|string',
            'preparation_right_image'    => 'bail|nullable|file|max:2048|mimes:png,jpg,jpeg,webp',
            'preparation_left_image'     => 'bail|nullable|file|max:2048|mimes:png,jpg,jpeg,webp',
            'reading_practice_title'          => 'bail|string',
            'reading_practice'    => 'bail|string',
            'speaking_practice_title'          => 'bail|string',
            'speaking_practice'    => 'bail|string',
            'listening_practice_title'          => 'bail|string',
            'listening_practice'    => 'bail|string',
            'writing_practice_title'          => 'bail|string',
            'writing_practice'    => 'bail|string',

            'format_title'               => 'bail|required|string',
            'format_description'         => 'bail|required|string',
            'reading_pattern'    => 'bail|string',
            'listening_pattern'    => 'bail|string',
            'writing_pattern'    => 'bail|string',
            'speaking_pattern'    => 'bail|string',

            'status'                     => 'bail|required|in:true,false,0,1',
        ];
    }
}
