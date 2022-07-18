<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Users\CompleteUserSeeder;
use Database\Seeders\Recipes\CompleteRecipeSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CompleteUserSeeder::CallSeeder();
        CompleteRecipeSeeder::CallSeeder();
    }
}
