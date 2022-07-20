<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_step', function (Blueprint $table) {
            $table->bigInteger('recipe_id')->unsigned();
            $table->foreign('recipe_id')->references('id')->on('recipes');

            $table->bigInteger('step_id')->unsigned();
            $table->foreign('step_id')->references('id')->on('steps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_step');
    }
};
