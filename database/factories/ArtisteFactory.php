<?php

namespace Database\Factories;

use App\Models\Artiste;
use App\Models\Representation;
use App\Models\Spectacle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artiste>
 */
class ArtisteFactory extends Factory
{

    protected $model = Artiste::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'NomArtiste' => fake()->name(),
            'spectacle_id' => Spectacle::factory(),

        ];
    }

    /**
     * The function "withRepresentations" attaches a random selection of representations to an artist.
     * 
     * @return static The `withRepresentations()` method is returning an instance of the class it
     * belongs to, using the `static` keyword. This allows for method chaining and returning the
     * current object after performing some operations within the method.
     */
    
    public function withRepresentations(): static
    {
        return $this->afterCreating(function (Artiste $artiste) {
            $représentations = Representation::inRandomOrder()->limit(rand(1, 3))->pluck('id')->toArray();

            if (!empty($représentations)) {
                $artiste->representations()->attach($représentations);
            }
        });
    }
}
