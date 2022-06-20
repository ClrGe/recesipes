<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_details')->delete();

        \App\Models\Recipes\RecipeDetails::factory(10)->create();
    }

    public static function CallSeeder()
    {
        $detailSeeder = new RecipeDetailsSeeder();
        $detailSeeder->run();
    }
}
