<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StudyAbroadRequest extends FormRequest
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
            'education_system_image'        => 'bail|nullable|file',
            'country_name'                  =>'required',
            'slug'                          =>'required',
            'why_message'                   =>'required',
            'welcome_message'               =>'required',
            'education_system_title'        =>'bail|string',
            'education_system_description'  =>'bail|string',

            'popular_course_title'          =>'required|string',
            'popular_course_description'    =>'required|string',

            'document_required_title'       => 'required|string',
            'document_required_description' => 'required|string',

            'intake_title'                  => 'required|string',
            'intake_description'            => 'required|string',
            'first_intake_image'            => 'bail|nullable|file',
            'second_intake_image'           => 'bail|nullable|file',
            'first_intake_session'          => 'required|string',
            'second_intake_session'         => 'required|string',


            'work_visa_section_title'        => 'required|string',
            'work_visa_section_description'  => 'required|string',
            'yellow_section_content'         => 'bail|nullable',
            'image_below_yellow_section'     => 'bail|nullable|file',
            'title_below_yellow_section'     => 'bail|nullable',
            'description_below_yellow_section'   => 'bail|nullable',

        ];
    }
}
