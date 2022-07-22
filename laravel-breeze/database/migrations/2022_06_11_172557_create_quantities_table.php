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
            $table->enum("unit", ['g', "Kg", 'mL', 'cL', 'L' , 'Cuillère à café', 'Cuillère à soupe','unité', 'Tasse', 'Tranches']);
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('quantities');
        Schema::enableForeignKeyConstraints();
    }
};
