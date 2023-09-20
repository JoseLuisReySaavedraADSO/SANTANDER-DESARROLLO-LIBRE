<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use App\Models\Gender;
use App\Models\Pet;
use App\Models\Race;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // CREAR ROL DE ADMINISTRADOR
        Rol::create([
            'name' => 'Administrador',
        ]);

        // CREAR ROL DE USUARIO
        Rol::create([
            'name' => 'Usuario',
        ]);

        // CREAR GENERO MACHO
        Gender::create([
            'name' => 'Macho',
        ]);

        // CREAR GENERO HEMBRA
        Gender::create([
            'name' => 'Hembra',
        ]);

        // CREAR CATEGORIA PERRO
        Categorie::create([
            'name' => 'Perro',
        ]);

        // CREAR CATEGORIA GATO
        Categorie::create([
            'name' => 'Gato',
        ]);

        // CREAR 16 USUARIOS
        User::factory(16)->create();

        // CREAR 5 RAZAS
        Race::factory(5)->create();

        // CREAR 20 MASCOTAS
        Pet::factory(20)->create();
    }
}
