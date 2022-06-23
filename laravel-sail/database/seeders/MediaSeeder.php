<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('media')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        \App\Models\Recipes\Media::factory(10)->create();
    }

    public static function CallSeeder()
    {
        $mediaSeeder = new MediaSeeder();
        $mediaSeeder->run();
    }
}
