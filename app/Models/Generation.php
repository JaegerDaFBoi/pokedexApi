<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    use HasFactory;

    protected $table = 'generations';
    protected $primaryKey = 'id_generation';

    protected $fillable = [
        'generation_name',
        'region'
    ];

    public function pokemon() {
        return $this->hasMany(Pokemon::class, 'fk_generation', 'id_generation');
    }
}
