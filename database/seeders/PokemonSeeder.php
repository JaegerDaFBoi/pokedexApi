<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_pokemons = File::get('database/pokemons.json');
        $data = json_decode($json_pokemons);
        foreach ($data as $pokemon) {
            Pokemon::create(array(
                'pokedex_number' => $pokemon->numero,
                'pokemon_name' => $pokemon->nombre,
                'pokemon_weight' => $pokemon->peso,
                'pokemon_height' => $pokemon->altura,
                'pokemon_habitat' => $pokemon->habitat,
                'fk_generation' => $pokemon->generacion,
                'fk_type1' => $pokemon->tipo1,
                'fk_type2' => $pokemon->tipo2,
                'fk_category' => $pokemon->categoria,
                'fk_skill' => $pokemon->habilidad,
                'pokemon_sprite_path' => $pokemon->sprite,
                'pokemon_image_path' => $pokemon->imagen1,
                'pokemon_alt_image_path' => $pokemon->imagen2
            ));
        }
    }
}
