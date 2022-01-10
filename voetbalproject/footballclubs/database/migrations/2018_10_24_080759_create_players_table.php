<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('number');
            $table->integer('score');
            $table->string('club_name')->nullable();
            $table->string('position')->nullable();
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('club_name')
                ->references('name')
                ->on('clubs')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('position')
                ->references('name')
                ->on('positions')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
