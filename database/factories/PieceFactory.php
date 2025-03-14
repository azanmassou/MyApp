<?php

namespace Database\Factories;

use App\Models\Piece;
use App\Models\Salle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Piece>
 */
class PieceFactory extends Factory
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
            'Lib_piece' => fake()->name(),
        ];
    }

     /**
     * The function "withRepresentations" attaches a random selection of representations to an artist.
     * 
     * @return static The `withRepresentations()` method is returning an instance of the class it
     * belongs to, using the `static` keyword. This allows for method chaining and returning the
     * current object after performing some operations within the method.
     */
    
     public function withSalles(): static
     {
         return $this->afterCreating(function (Piece $piece) {
             $salles = Salle::inRandomOrder()->limit(rand(1, 3))->pluck('id')->toArray();
 
             if (!empty($salles)) {
                 $piece->salles()->attach($salles);
             }
         });
     }
}
