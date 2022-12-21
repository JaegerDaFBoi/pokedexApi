<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokedexEntry extends Model
{
    use HasFactory;

    protected $table = 'pokedex_entries';
    protected $primaryKey = 'id_pokedex_entries';

    protected $fillable = [
        'redfire_entry',
        'soulsilver_entry',
        'emerald_entry',
        'platinum_entry',
        'fk_pokemon'
    ];

    public function pokemon() {
        return $this->belongsTo(Pokemon::class, 'fk_pokemon', 'id_pokemon');
    }
}
