<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skills';
    protected $primaryKey = 'id_skill';

    protected $fillable = [
        'skill_name',
        'skill_description'
    ];

    public function pokemon() {
        return $this->hasMany(Pokemon::class, 'fk_skill', 'id_skill');
    }
}
