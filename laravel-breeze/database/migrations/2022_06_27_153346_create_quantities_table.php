<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quantities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("ingredient_id");
            $table->smallInteger("quantity");
            $table->enum("unit", ['g','Tranches','Cuillère à soupe','mL','unité','Cuillère à café','Tasse',]);
            $table->bigInteger("recipe_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('quantities');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};