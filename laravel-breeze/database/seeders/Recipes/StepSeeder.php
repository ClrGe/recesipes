<?php

namespace Database\Seeders\Recipes;

use App\Models\Recipes\Recipe;
use App\Models\Recipes\Step;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table("steps")->delete();
        Schema::enableForeignKeyConstraints();

        Step::factory(20)->create();
    }

}
