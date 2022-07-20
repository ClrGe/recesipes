<?php

namespace Database\Seeders\Recipes;

use App\Models\Recipes\Recipe;
use App\Models\Recipes\Steps;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class StepsSeeder extends Seeder
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

        Steps::factory(20)->create();    }

}
