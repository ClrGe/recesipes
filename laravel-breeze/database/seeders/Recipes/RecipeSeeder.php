<?php

namespace Database\Seeders\Recipes;

use App\Models\Recipes\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('recipes')->delete();
        Schema::enableForeignKeyConstraints();


        Recipe::factory(20)->create();
    }

}
