<?php

namespace Database\Seeders\Recipes;

use App\Models\Recipes\Evaluation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table("evaluations")->delete();
        Schema::enableForeignKeyConstraints();

        Evaluation::factory(20)->create();
    }


}
