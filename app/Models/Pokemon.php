<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons';
    protected $primaryKey = 'id_pokemon';

    protected $fillable = [
        'pokedex_number',
        'pokemon_name',
        'pokemon_weight',
        'pokemon_height',
        'pokemon_habitat',
        'pokemon_generation',
        'fk_type1',
        'fk_type2',
        'fk_category',
        'fk_skill',
        'pokemon_image_path',
        'pokemon_alt_image_path'
    ];

    public function mainType() {
        return $this->belongsTo(Type::class, 'fk_type1', 'id_type');
    }

    public function secondaryType() {
        return $this->belongsTo(Type::class, 'fk_type2', 'id_type');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'fk_category', 'id_category');
    }

    public function skill() {
        return $this->belongsTo(Skill::class, 'fk_skill', 'id_skill');
    }

    public function pokedexEntries() {
        return $this->hasOne(PokedexEntry::class, 'fk_pokemon', 'id_pokemon');
    }

    public function stats() {
        return $this->hasOne(Stat::class, 'fk_pokemon', 'id_pokemon');
    }

    public function generation() {
        return $this->belongsTo(Generation::class, 'fk_generation', 'id_generation');
    }
}
