<?php

namespace Database\Seeders\Recipes;

use App\Models\Recipes\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->delete();
        Schema::enableForeignKeyConstraints();

        Category::factory(10)->create();

    }

}
