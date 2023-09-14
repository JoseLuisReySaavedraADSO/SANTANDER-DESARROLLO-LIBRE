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
            'race_id' => '1',
            'categorie_id' => '1',
            'photo' => fake()->name(),
            'gender_id' => '1',
        ];
    }
}
