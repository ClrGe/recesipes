<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table("quantities")->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        \App\Models\Recipes\Quantity::factory(20)->create();

    }

    public static function CallSeeder()
    {
        $quantitySeeder = new QuantitySeeder();
        $quantitySeeder->run();
    }
}
