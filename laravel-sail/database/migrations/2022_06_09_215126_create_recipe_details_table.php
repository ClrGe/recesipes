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
        Schema::create('recipe_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("recipe_id");
            $table->integer("cook_duration");
            $table->integer("resting_duration");
            $table->integer("preparation_duration");
            $table->smallInteger("likes-total");
            $table->enum("price_range", ['Economique', 'Moyen', 'Luxe']);
            $table->enum("difficulty", ['Facile', 'Moyen', 'Difficile']);
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
        Schema::dropIfExists('recipe_details');
    }
};
