<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    // Table Data and attributes

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
        'pokemon_sprite_path',
        'pokemon_image_path',
        'pokemon_alt_image_path'
    ];

    // Relationship Functions

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

    //Accesors

    protected function pokedexNumber(): Attribute {
        
        return Attribute::make(
            get: function ($value) {
                if ($value < 10) {
                    $retornableNumber = str_pad($value, 3, "0", STR_PAD_LEFT);
                } elseif ($value >= 10 && $value <= 99) {
                    $retornableNumber = str_pad($value, 2, "0", STR_PAD_LEFT);
                } elseif ($value >=100 && $value <= 999) {
                    $retornableNumber = str_pad($value, 1, "0", STR_PAD_LEFT);
                } else {
                    $retornableNumber = $value;
                }
                return $retornableNumber;
            }
        );
    }
}
