<?php

namespace Database\Seeders\Recipes;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        \App\Models\Recipes\Evaluation::factory(10)->create();
    }

    public static function CallSeeder()
    {
        $evaluationSeeder = new EvaluationSeeder();
        $evaluationSeeder->run();
    }
}
