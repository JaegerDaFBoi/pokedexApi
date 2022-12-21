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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id('id_pokemon');
            $table->integer('pokedex_number');
            $table->tinyText('pokemon_name');
            $table->float('pokemon_weight', 4, 1)->nullable();
            $table->float('pokemon_height', 2, 1)->nullable();
            $table->tinyText('pokemon_habitat')->nullable();

            $table->unsignedBigInteger('fk_generation');
            $table->foreign('fk_generation')->references('id_generation')->on('generations')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedBigInteger('fk_type1');
            $table->foreign('fk_type1')->references('id_type')->on('types')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedBigInteger('fk_type2');
            $table->foreign('fk_type2')->references('id_type')->on('types')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedBigInteger('fk_category');
            $table->foreign('fk_category')->references('id_category')->on('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedBigInteger('fk_skill');
            $table->foreign('fk_skill')->references('id_skill')->on('skills')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->mediumText('pokemon_image_path');
            $table->mediumText('pokemon_alt_image_path')->nullable();
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
        Schema::dropIfExists('pokemons');
    }
};
