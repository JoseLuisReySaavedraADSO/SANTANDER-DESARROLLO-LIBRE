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
        Rol::factory(1)->create();
        User::factory(16)->create();
        Gender::factory(5)->create();
        Race::factory(5)->create();
        categorie::factory(5)->create();
        Pet::factory(20)->create();
    }
}
