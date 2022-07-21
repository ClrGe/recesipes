<?php

namespace Database\Seeders;

use App\Models\ShoppingList;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ShoppingListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('shopping_lists')->delete();
        Schema::enableForeignKeyConstraints();

        ShoppingList::factory(20)->create();
    }
}
