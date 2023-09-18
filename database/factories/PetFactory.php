<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'id' => '',
            'name' => fake()->name(),
            'race_id' => rand(1,5),
            'categorie_id' => rand(1,2),
            'photo' => fake()->randomElement(['images-frontEnd/ivana.png', 'images-frontEnd/karsten.png', 'images-frontEnd/reigner.png', 'images-frontEnd/alvan.png']),
            'gender_id' => rand(1,2),
        ];
    }
}
