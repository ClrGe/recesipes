<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('categories')->insert([
            "name" => "Française",
            "type" => "Provenance",
        ]);

        DB::table('categories')->insert([
            "name" => "Americaine",
            "type" => "Provenance",
        ]);

        DB::table('categories')->insert([
            "name" => "Italienne",
            "type" => "Provenance",
        ]);

        DB::table('categories')->insert([
            "name" => "Britannique",
            "type" => "Provenance",
        ]);

        DB::table('categories')->insert([
            "name" => "Chinoise",
            "type" => "Provenance",
        ]);

        DB::table('categories')->insert([
            "name" => "Japonaise",
            "type" => "Provenance",
        ]);

        DB::table('categories')->insert([
            "name" => "Vietnamienne",
            "type" => "Provenance",
        ]);

        DB::table('categories')->insert([
            "name" => "Indienne",
            "type" => "Provenance",
        ]);

        DB::table('categories')->insert([
            "name" => "Espagnole",
            "type" => "Provenance",
        ]);
        
        DB::table('categories')->insert([
            "name" => "Thaï",
            "type" => "Provenance",
        ]);
        
        DB::table('categories')->insert([
            "name" => "Turque",
            "type" => "Provenance",
        ]);
        
        DB::table('categories')->insert([
            "name" => "Mexicaine",
            "type" => "Provenance",
        ]);



        DB::table('categories')->insert([
            "name" => "Vegan",
            "type" => "FoodType",
        ]);

        DB::table('categories')->insert([
            "name" => "Viande",
            "type" => "FoodType",
        ]);

        DB::table('categories')->insert([
            "name" => "Dessert",
            "type" => "FoodType",
        ]);

        DB::table('categories')->insert([
            "name" => "Poisson",
            "type" => "FoodType",
        ]);

        DB::table('categories')->insert([
            "name" => "Entrée",
            "type" => "FoodType",
        ]);

        DB::table('categories')->insert([
            "name" => "Plat",
            "type" => "FoodType",
        ]);

        DB::table('categories')->insert([
            "name" => "Soupe",
            "type" => "FoodType",
        ]);



        DB::table('categories')->insert([
            "name" => "Autre",
            "type" => "FoodType",
        ]);

    }

    public static function CallSeeder()
    {
        $categorySeeder = new CategorySeeder();
        $categorySeeder->run();
    }
}
