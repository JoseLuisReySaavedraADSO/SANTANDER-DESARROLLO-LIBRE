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
        // ELEGIR DE MANERA ALEATORIA LA CATEGORIA ENTRE 1 (PERRO) O 2 (GATO)
        $category = rand(1, 2);

        // DEPENDIENTO DE LA CATEGORIA SE ELIGE AL AZAR LA FOTO DE LA MASCOTA
        $photo = $category === 1
            ? fake()->randomElement(['images-frontEnd/ivana.png', 'images-frontEnd/karsten.png', 'images-frontEnd/reigner.png', 'images-frontEnd/alvan.png'])
            : fake()->randomElement(['images-frontEnd/remi.png', 'images-frontEnd/zoe.png', 'images-frontEnd/ariana.png']);

        return [
            // NOMBRE MASCOTA
            'name' => fake()->name(),
            
            // RAZA MASCOTA
            'race_id' => rand(1, 5),
            
            // CATEGORIA MASCOTA
            'categorie_id' => $category,

            // FOTO MASCOTA
            'photo' => $photo,
            
            // GENERO MASCOTA
            'gender_id' => rand(1, 2),
        ];
    }
}
