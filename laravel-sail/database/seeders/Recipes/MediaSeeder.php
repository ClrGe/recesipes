<?php

namespace Database\Seeders\Recipes;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('media')->delete();
        Schema::enableForeignKeyConstraints();
        
        \App\Models\Recipes\Media::factory(10)->create();
    }

    public static function CallSeeder()
    {
        $mediaSeeder = new MediaSeeder();
        $mediaSeeder->run();
    }
}
