<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;

    protected $table = 'stats';
    protected $primarykey = 'id_stats';

    protected $fillable = [
        'ps',
        'attack',
        'defense',
        'swiftness',
        'special_attack',
        'special_defense',
        'fk_pokemon'
    ];

    public function pokemon() {
        return $this->belongsTo(Pokemon::class, 'fk_pokemon', 'id_pokemon');
    }
}
