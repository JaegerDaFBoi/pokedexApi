<?php

namespace Database\Seeders;

use App\Models\PokedexEntry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PokedexEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_entries = File::get('database/pokedexentries.json');
        $data = json_decode($json_entries);
        foreach ($data as $entry) {
            PokedexEntry::create(array(
                'redfire_entry' => $entry->rojofuego,
                'soulsilver_entry' => $entry->almaplata,
                'emerald_entry' => $entry->esmeralda,
                'platinum_entry' => $entry->platino,
                'fk_pokemon' => $entry->pokemon
            ));
        }
    }
}
