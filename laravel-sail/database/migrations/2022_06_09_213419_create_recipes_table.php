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
            $table->string("name");
            $table->text("steps");
            $table->text("description");
            $table->bigInteger("category_id");
            $table->bigInteger("quantities_id");
            $table->bigInteger("detail_id");
            $table->bigInteger("media_id");
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
        Schema::dropIfExists('recipes');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
