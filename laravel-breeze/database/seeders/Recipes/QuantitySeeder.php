<?php

namespace Database\Seeders\Recipes;

use App\Models\Recipes\Quantity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        Quantity::factory(20)->create();
    }


}
