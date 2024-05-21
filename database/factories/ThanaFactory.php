<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thana>
 */
class ThanaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //fake() method use for generate random data from faker library
            // use this method district_id and thana name
            'district_id' => $this->faker->numberBetween(1, 30), // Assuming you have 30 districts
            'name' => $this->faker->citySuffix,
            'active' => 1,
            'updated_at' => null,
        ];
    }
}
