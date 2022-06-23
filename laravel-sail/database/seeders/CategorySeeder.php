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
            "type" => "Entrée",
        ]);   

        DB::table('categories')->insert([
            "type" => "Plat",
        ]); 

        DB::table('categories')->insert([
            "type" => "Dessert",
        ]); 




        DB::table('categories')->insert([
            "type" => "Entrée",
            "subtype1" => "Froid",
        ]);   

        DB::table('categories')->insert([
            "type" => "Entrée",
            "subtype1" => "Chaud",
        ]);   

        DB::table('categories')->insert([
            "type" => "Plat",
            "subtype1" => "Viande",
        ]); 

        DB::table('categories')->insert([
            "type" => "Plat",
            "subtype1" => "Poisson",
        ]); 

        DB::table('categories')->insert([
            "type" => "Plat",
            "subtype1" => "Vegan",
        ]); 





        DB::table('categories')->insert([
            "type" => "Entrée",
            "subtype1" => "Chaud",
            "subtype2" => "Soupe",
        ]); 

        DB::table('categories')->insert([
            "type" => "Entrée",
            "subtype1" => "Froid",
            "subtype2" => "Fruit de mer",
        ]); 

    }

    public static function CallSeeder()
    {
        $categorySeeder = new CategorySeeder();
        $categorySeeder->run();
    }
}
