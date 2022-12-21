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
        Schema::create('pokedex_entries', function (Blueprint $table) {
            $table->id('id_pokedex_entries');
            $table->longText('redfire_entry');
            $table->longText('soulsilver_entry');
            $table->longText('emerald_entry');
            $table->longText('platinum_entry')->nullable();
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
        Schema::dropIfExists('pokedex_entries');
    }
};
