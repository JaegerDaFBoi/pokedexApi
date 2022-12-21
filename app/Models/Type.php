<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';
    protected $primaryKey = 'id_type';

    protected $fillable = [
        'type_name',
        'type_image_path'
    ];

    public function pokemonMainType() {
        return $this->hasMany(Pokemon::class, 'fk_type1', 'id_type');
    }

    public function pokemonSecondaryType() {
        return $this->hasMany(Pokemon::class, 'fk_type2', 'id_type');
    }
}
