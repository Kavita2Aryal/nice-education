<?php

namespace Database\Factories;

use App\Models\WhyUs;
use Illuminate\Database\Eloquent\Factories\Factory;

class WhyUsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WhyUs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'icon'           => $this->faker->name,
            'title'           => $this->faker->name,
            'description'      => $this->faker->name,

        ];
    }
}
