<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->delete();

        \App\Models\Recipes\Recipe::factory(20)->create();
    }

    public static function CallSeeder()
    {
        $recipeSeeder = new RecipeSeeder();
        $recipeSeeder->run();
    }
}
