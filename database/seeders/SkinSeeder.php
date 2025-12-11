<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skin;

// esto sirve para llenar la base de datos con datos iniciales
class SkinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skins = [
            [
                'nombre' => 'Chani',
                'descripcion' => 'Un poderoso guerrero Fremen y un hábil superviviente.',
                'rareza' => 'Épico',
                'temporada' => 'Capítulo 2 - Temporada 8',
                'fecha_lanzamiento' => '2021-10-20',
                'imagen' => 'assets/img/Chani.webp',
                'tipo' => 'skin'
            ],
            [
                'nombre' => 'Reaccion',
                'descripcion' => 'Devolver el Golpe',
                'rareza' => 'Legendaria',
                'temporada' => 'Capítulo 2 - Temporada 4',
                'fecha_lanzamiento' => '2020-09-11',
                'imagen' => 'assets/img/reaccion.png',
                'tipo' => 'skin'
            ],
            [
                'nombre' => 'Bruja del Surf',
                'descripcion' => 'Maldice la playa con tu oscura presencia',
                'rareza' => 'Legendaria',
                'temporada' => 'Capítulo 2 - Temporada 3',
                'fecha_lanzamiento' => '2020-06-30',
                'imagen' => 'assets/img/brujaSurf.png',
                'tipo' => 'skin'
            ],
            [
                'nombre' => 'Traje de Cómic de Catwoman',
                'descripcion' => 'La Gata Fatal de Gotham',
                'rareza' => 'Común',
                'temporada' => 'Temporada X',
                'fecha_lanzamiento' => '2019-09-21',
                'imagen' => 'assets/img/catwomanTrajeComic.png',
                'tipo' => 'skin'
            ],
            [
                'nombre' => 'Par Patroller',
                'descripcion' => 'La Paciencia y la Concentración ganan la partida',
                'rareza' => 'Común',
                'temporada' => 'Capítulo 2 - Temporada 3',
                'fecha_lanzamiento' => '2020-07-19',
                'imagen' => 'assets/img/parPatroller.png',
                'tipo' => 'skin'
            ],
            [
                'nombre' => 'Eco',
                'descripcion' => '¿Eres Real o Solo un Reflejo?',
                'rareza' => 'Raro',
                'temporada' => 'Capítulo 2 - Temporada 2',
                'fecha_lanzamiento' => '2020-03-07',
                'imagen' => 'assets/img/ecoSkin.png',
                'tipo' => 'skin'
            ],
            [
                'nombre' => 'Paradigma',
                'descripcion' => 'Su deber Desafía la realidad. Una de los Siete',
                'rareza' => 'Legendaria',
                'temporada' => 'Capítulo 3 - Temporada 4',
                'fecha_lanzamiento' => '2022-09-18',
                'imagen' => 'assets/img/paradigma.png',
                'tipo' => 'los_siete'
            ],
            [
                'nombre' => 'La Imaginada',
                'descripcion' => 'Su pasado es la clave de nuestro futuro. Parte de Los Siete',
                'rareza' => 'Legendaria',
                'temporada' => 'Capítulo 3 - Temporada 2',
                'fecha_lanzamiento' => '2022-03-20',
                'imagen' => 'assets/img/laImaginada.png',
                'tipo' => 'los_siete'
            ],
            [
                'nombre' => 'La Fundación',
                'descripcion' => 'Su Misión es la totalidad. Lider de Los Siete',
                'rareza' => 'Legendaria',
                'temporada' => 'Capítulo 3 - Temporada 1',
                'fecha_lanzamiento' => '2022-02-03',
                'imagen' => 'assets/img/laFundicion.png',
                'tipo' => 'los_siete'
            ],
            [
                'nombre' => 'El Paradigma Realidad 1',
                'descripcion' => 'Su Lealtad es Desconocida',
                'rareza' => 'Legendaria',
                'temporada' => 'Temporada X',
                'fecha_lanzamiento' => '2019-10-11',
                'imagen' => 'assets/img/realidad1Paradigma.png',
                'tipo' => 'los_siete'
            ],
            [
                'nombre' => 'El Origen',
                'descripcion' => 'Su realidad sigue viva. Parte de Los Siete',
                'rareza' => 'Legendaria',
                'temporada' => 'Capitulo 3, Temporada 2',
                'fecha_lanzamiento' => '2022-03-20',
                'imagen' => 'assets/img/The-Origin.webp',
                'tipo' => 'los_siete'
            ],
            [
                'nombre' => 'El Visitante',
                'descripcion' => 'Intenciones Desconocidas',
                'rareza' => 'Legendaria',
                'temporada' => 'Temporada 4',
                'fecha_lanzamiento' => '2018-05-01',
                'imagen' => 'assets/img/elVisitante.png',
                'tipo' => 'los_siete'
            ]
        ];

        foreach ($skins as $skin) {
            Skin::create($skin);
        }
    }
}
