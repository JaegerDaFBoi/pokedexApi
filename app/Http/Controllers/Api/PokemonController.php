<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePokemonRequest;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemon_data = Pokemon::select(
            'id_pokemon', 
            'pokedex_number', 
            'pokemon_name', 
            'pokemon_sprite_path',
            'fk_generation',
            'fk_type1',
            'fk_type2')
        ->with('generation', 'mainType', 'secondaryType')
        ->get();

        return response()->json([
            'pokemons' => $pokemon_data,
            'status' => true
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePokemonRequest $request)
    {
        $pokemon = Pokemon::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Pokemon agregado correctamente!",
            'pokemon' => $pokemon
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show($idPokemon)
    {
        $pokemon = Pokemon::where('pokedex_number', $idPokemon)
        ->with(
            'generation',
            'mainType',
            'secondaryType',
            'category',
            'skill',
            'stats',
            'pokedexEntries'
            )
        ->get();

        return response()->json([
            'pokemon' => $pokemon,
            'status' => true
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        //
    }
}
