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
        $category = rand(1, 2);
        $photo = $category === 1
            ? fake()->randomElement(['images-frontEnd/ivana.png', 'images-frontEnd/karsten.png', 'images-frontEnd/reigner.png', 'images-frontEnd/alvan.png'])
            : fake()->randomElement(['images-frontEnd/remi.png', 'images-frontEnd/zoe.png', 'images-frontEnd/ariana.png']);
        return [
            // 'id' => '',
            'name' => fake()->name(),
            'race_id' => rand(1, 5),
            'categorie_id' => $category,
            'photo' => $photo,
            'gender_id' => rand(1, 2),
        ];
    }
}
