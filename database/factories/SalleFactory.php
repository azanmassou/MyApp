<?php

namespace Database\Factories;

use App\Models\Representation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salle>
 */
class SalleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'TypeSalle' => fake()->lastName(),
            'Capacite' => fake()->numberBetween(500 , 5000),
            'representation_id' => Representation::factory(),
        ];
    }
}
