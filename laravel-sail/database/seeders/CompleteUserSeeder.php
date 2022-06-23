<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompleteUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PermissionSeeder::CallSeeder();
        RoleSeeder::CallSeeder();
        UserSeeder::CallSeeder();
    }

    public static function CallSeeder()
    {
        $fullUserSeeder = new CompleteUserSeeder();
        $fullUserSeeder->run();
    }
}
