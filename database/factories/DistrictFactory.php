<?php

namespace Database\Factories;

use App\Models\District;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\District>
 */
class DistrictFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    //
    protected $model = District::class;
    public function definition(): array
    {
        return [
            'division_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->city,
            'active' => 1,
            'updated_at' => null,
        ];
    }
}
