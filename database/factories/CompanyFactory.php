<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Company::class;
    public function definition()
    {
        return [
            'name' => "Nice Education Consultancy",
            'logo' =>'logo.png',
            'homepage_banner' =>'banner.png',
            'email' => "info@niceeducation.com.np",
            'phone' =>'+977-1-4417471',
            'mobile' => "9851126739",
            'whatsapp_number' => '9851000715',
            'address' => "Dillibazar,Kathmandu",
            'footer_text' => "Nice Education Consultancy Pvt. Ltd. is an experienced professional in Abroad Study Field and has vast knowledge in the respected field. If you are here than you are in the most successful consultant.",
            'our_mission' => "We strive to make abroad study journey life changing and worthy decision for students throughout the process of career counseling, universities selection and admission, and hassle free visa support services. ",
            'our_vision' => "Nice Education is a specialized educational advising agency dedicated to offering an affordable, high quality test preparation and accurate advising services for students seeking to study in the United States and other study destinations.",

        ];
    }
}
