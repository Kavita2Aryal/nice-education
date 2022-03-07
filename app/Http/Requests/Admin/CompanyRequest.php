<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'fav_icon'=> 'bail|nullable|file|max:2048|mimes:png,jpg,jpeg,webp',
            'name'=>'required',
            'email' =>'required',
            'alternate_email' =>'bail|nullable|string',
            'established_date' =>'bail|nullable|string',
            'address' =>'bail|required|string',
            'phone' =>'bail|nullable|string',
            'mobile' =>'bail|nullable|string',
            'facebook_url' =>'bail|nullable|string',
            'instagram_url' =>'bail|nullable|string',
            'linkedin_url' =>'bail|nullable|string',
            'whatsapp_number' =>'bail|nullable|string',
            'map_url' =>'bail|nullable|string',
            'our_mission' =>'bail|nullable|string',
            'our_vision' =>'bail|nullable|string',
            'title_for_contact_us' =>'bail|nullable|string',
            'description_for_contact_us' =>'bail|nullable|string',
            'footer_text' =>'bail|nullable|string',

            'homepage_banner'=> 'bail|nullable|file|max:2048|mimes:png,jpg,jpeg,webp',
            'banner_title' =>'bail|nullable|string',
            'sub_text' =>'bail|nullable|string',
            'btn_text' =>'bail|nullable|string',
            'btn_url' =>'bail|nullable|string',

            'visa_acceptance_image1'=> 'bail|nullable|file|max:2048|mimes:png,jpg,jpeg,webp',
            'visa_acceptance_image2'=> 'bail|nullable|file|max:2048|mimes:png,jpg,jpeg,webp',
            'visa_acceptance_description1' =>'bail|nullable|string',
            'visa_acceptance_description2' =>'bail|nullable|string',



        ];
    }
}
