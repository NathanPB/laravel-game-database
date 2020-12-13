<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('release_year');
            $table->string('license');
            $table->unsignedBigInteger('project_state_id');
            $table->foreign('project_state_id')->references('id')->on('project_states');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('game_genres');
            $table->unsignedBigInteger('engine_id');
            $table->foreign('engine_id')->references('id')->on('game_engines');
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
        Schema::dropIfExists('games');
    }
}
