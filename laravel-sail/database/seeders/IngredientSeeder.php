<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('ingredients')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $response = Http::get('https://www.themealdb.com/api/json/v1/1/list.php?i=list');
        $data = $response->json();
        foreach($data['meals'] as $ingredient)
        {
            DB::table('ingredients')->insert([
                'name' => $ingredient['strIngredient'],
                'unit' => 'none',
            ]);
        }
    }

    public static function CallSeeder()
    {
        $ingredientSeeder = new IngredientSeeder();
        $ingredientSeeder->run();
    }
}
