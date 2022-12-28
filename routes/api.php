<?php

use App\Http\Controllers\Api\PokemonController;
use App\Http\Controllers\Api\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(TypeController::class)->group(function () {
    Route::prefix('types')->group(function () {
        Route::get('/fetchAllTypes', 'index');
        Route::get('/{idType}/fetchType', 'show');
    });
});

Route::controller(PokemonController::class)->group(function () {
    Route::prefix('pokemon')->group(function () {
        Route::get('/fetchAllPokemons', 'index');
        Route::get('/{idPokemon}/showPokemon', 'show');
    });
});

