<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameEngineLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_engine_langs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('engine_id')->references('id')->on('game_engine_langs')->onDelete('cascade');
            $table->unsignedBigInteger('lang_id')->references('id')->on('programming_langs');
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
        Schema::dropIfExists('game_engine_langs');
    }
}
