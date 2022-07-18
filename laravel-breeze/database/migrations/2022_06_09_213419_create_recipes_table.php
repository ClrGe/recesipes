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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->tinyInteger("guest_number")->default(2);
            $table->text("steps")->nullable();
            $table->text("description")->nullable();
            $table->bigInteger("category_id")->nullable();
            $table->enum("price_range", ['Economique', 'Moyen', 'Luxe'])->nullable();
            $table->enum("difficulty", ['Facile', 'Moyen', 'Difficile'])->nullable();
            $table->smallInteger("cook_duration")->nullable();
            $table->smallInteger("resting_duration")->nullable();
            $table->smallInteger("preparation_duration")->nullable();
            $table->bigInteger("user_id");
            $table->timestamp("publish_time");
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
        Schema::dropIfExists('recipes');
        Schema::enableForeignKeyConstraints();
    }
};
