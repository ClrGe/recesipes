<?php

namespace Database\Seeders;


use Database\Seeders\Recipes\CompleteRecipeSeeder;
use Database\Seeders\Users\CompleteUserSeeder;
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
        $this->call([
            CompleteUserSeeder::class,
            CompleteRecipeSeeder::class,
        ]);

    }
}
