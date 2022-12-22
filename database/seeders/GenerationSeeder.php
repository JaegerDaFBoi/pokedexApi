<?php

namespace Database\Seeders;

use App\Models\Generation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generations = [
            [
                'generation_name' => 'Primera generación',
                'region' => 'Kanto'
            ],
            [
                'generation_name' => 'Segunda generación',
                'region' => 'Johto'
            ],
            [
                'generation_name' => 'Tercera generación',
                'region' => 'Hoenn'
            ],
            [
                'generation_name' => 'Cuarta generación',
                'region' => 'Sinnoh'
            ]
        ];

        foreach ($generations as $generation) {
            Generation::create([
                'generation_name' => $generation['generation_name'],
                'region' => $generation['region']
            ]);
        }
    }
}
