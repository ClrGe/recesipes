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
        DB::table('media')->delete();

        \App\Models\Recipes\Media::factory(10)->create();
    }

    public static function CallSeeder()
    {
        $mediaSeeder = new MediaSeeder();
        $mediaSeeder->run();
    }
}
