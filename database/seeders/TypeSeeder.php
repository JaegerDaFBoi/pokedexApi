<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'type_name' => 'Acero',
                'type_image_path' => 'tipoacero.svg'
            ],
            [
                'type_name' => 'Agua',
                'type_image_path' => 'tipoagua.svg'
            ],
            [
                'type_name' => 'Bicho',
                'type_image_path' => 'tipobicho.svg'
            ],
            [
                'type_name' => 'Dragón',
                'type_image_path' => 'tipodragon.svg'
            ],
            [
                'type_name' => 'Eléctrico',
                'type_image_path' => 'tipoelectrico.svg'
            ],
            [
                'type_name' => 'Fantasma',
                'type_image_path' => 'tipofantasma.svg'
            ],
            [
                'type_name' => 'Fuego',
                'type_image_path' => 'tipofuego.svg'
            ],
            [
                'type_name' => 'Hada',
                'type_image_path' => 'tipohada.svg'
            ],
            [
                'type_name' => 'Hielo',
                'type_image_path' => 'tipohielo.svg'
            ],
            [
                'type_name' => 'Lucha',
                'type_image_path' => 'tipolucha.svg'
            ],
            [
                'type_name' => 'Normal',
                'type_image_path' => 'tiponormal.svg'
            ],
            [
                'type_name' => 'Planta',
                'type_image_path' => 'tipoplanta.svg'
            ],
            [
                'type_name' => 'Psíquico',
                'type_image_path' => 'tipopsiquico.svg'
            ],
            [
                'type_name' => 'Roca',
                'type_image_path' => 'tiporoca.svg'
            ],
            [
                'type_name' => 'Siniestro',
                'type_image_path' => 'tiposiniestro.svg'
            ],
            [
                'type_name' => 'Tierra',
                'type_image_path' => 'tipotierra.svg'
            ],
            [
                'type_name' => 'Veneno',
                'type_image_path' => 'tipoveneno.svg'
            ],
            [
                'type_name' => 'Volador',
                'type_image_path' => 'tipovolador.svg'
            ]
        ];

        foreach ($types as $type) {
            Type::create([
                'type_name' => $type['type_name'],
                'type_image_path' => $type['type_image_path']
            ]);
        }
    }
}
