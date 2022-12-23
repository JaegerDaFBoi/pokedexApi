<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_stats = File::get('database/stats.json');
        $data = json_decode($json_stats);
        foreach ($data as $stats) {
            Stat::create(array(
                'ps' => $stats->ps,
                'attack' => $stats->ataque,
                'defense' => $stats->defensa,
                'swiftness' => $stats->velocidad,
                'special_attack' => $stats->ataqueespecial,
                'special_defense' => $stats->defensaespecial,
                'fk_pokemon' => $stats->pokemon
            ));
        }
    }
}
