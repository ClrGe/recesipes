<?php

namespace Database\Seeders\Recipes;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('ingredients')->delete();
        Schema::enableForeignKeyConstraints();

        $response = Http::get('https://www.themealdb.com/api/json/v1/1/list.php?i=list');
        $data = $response->json();
        foreach($data['meals'] as $ingredient)
        {
            DB::table('ingredients')->insert([
                'name' => $ingredient['strIngredient'],
            ]);
        }
    }
}
