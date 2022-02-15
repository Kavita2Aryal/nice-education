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
            'email' => "info@niceeducation.com.np",
            'mobile' => "9851126739",
            'address' => "Dillibazar,Kathmandu",

        ];
    }
}
