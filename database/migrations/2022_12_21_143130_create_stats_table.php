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
        Schema::create('stats', function (Blueprint $table) {
            $table->id('id_stats');
            $table->integer('ps');
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('swiftness');
            $table->integer('special_attack')->nullable();
            $table->integer('special_defense')->nullable();
            $table->unsignedBigInteger('fk_pokemon');
            $table->foreign('fk_pokemon')->references('id_pokemon')->on('pokemons')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('stats');
    }
};
