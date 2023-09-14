<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use App\Models\Gender;
use App\Models\Pet;
use App\Models\Race;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(16)->create();
        Gender::factory(1)->create();
        Race::factory(1)->create();
        categorie::factory(1)->create();
        Pet::factory(20)->create();

    }
}
