<?php

namespace Database\Seeders;

use App\Models\Users\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permAdmin = Permission::all()->firstwhere('all','=' ,1);
        $permEditor = Permission::all()->where('all', '=', 0)->where('self_editing', '=', 1)->first();
        $permUser = Permission::all()->firstwhere('self_editing', '=', 0);

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('roles')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('roles')->insert([
            "title" => "Administrator",
            "permissions_id" => $permAdmin->id,
        ]);

        DB::table('roles')->insert([
            "title" => "Editeur",
            "permissions_id" => $permEditor->id,
        ]);

        DB::table('roles')->insert([
            "title" => "Utilisateur",
            "permissions_id" => $permUser->id,
        ]);

    }

    public static function CallSeeder()
    {
        $rolesSeeder = new RoleSeeder();
        $rolesSeeder->run();
    }
}
