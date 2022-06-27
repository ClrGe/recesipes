<?php

namespace Database\Seeders\Recipes;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Recipes\Ingredient;
use App\Models\Recipes\Recipe;
use Illuminate\Support\Facades\Schema;

class QuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table("quantities")->delete();
        Schema::enableForeignKeyConstraints();

        \App\Models\Recipes\Quantity::factory(20)->create();
    }
}
