<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class offers_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert(array(
            'name' => 'Desarrollador Front end',
            'description' => 'Se busca desarrollador front end bla bla...',
            'area' => 'informatica',
            'city' => 'Barcelona',
            'typeWorkday' => 'total',
            'requirements' => 'Se requiere HTML, CSS, JS, Angular...',
            'status' => 'activo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idCompany' => 1
        ));

        DB::table('offers')->insert(array(
            'name' => 'Desarrollador Backend',
            'description' => 'Se busca desarrollador back end bla bla...',
            'area' => 'informatica',
            'city' => 'Barcelona',
            'typeWorkday' => 'parcial',
            'requirements' => 'Se requiere PHP, SQL...',
            'status' => 'activo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idCompany' => 2
        ));

        DB::table('offers')->insert(array(
            'name' => 'Cocinero Restaurante de lujo',
            'description' => 'Se busca cocinero en practicas bla bla...',
            'area' => 'hosteleria',
            'city' => 'Madrid',
            'typeWorkday' => 'parcial',
            'requirements' => 'Se requiere conocimiento en mariscos...',
            'status' => 'cerrado',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idCompany' => 1
        ));

        DB::table('offers')->insert(array(
            'name' => 'Camarero en Hotel 4 estrellas',
            'description' => 'Se busca camarero para sala...',
            'area' => 'hosteleria',
            'city' => 'Barcelona',
            'typeWorkday' => 'total',
            'requirements' => 'No se requiere experiencia...',
            'status' => 'activo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idCompany' => 1
        ));

        DB::table('offers')->insert(array(
            'name' => 'Relaciones publicas, eventos y animación en hotel',
            'description' => 'Practicas en hotel bla bla...',
            'area' => 'RRHH',
            'city' => 'Madrid',
            'typeWorkday' => 'parcial',
            'requirements' => 'Se requiere saber de turismo...',
            'status' => 'activo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idCompany' => 1
        ));

        DB::table('offers')->insert(array(
            'name' => 'Diseñador grafico',
            'description' => 'Se busca diseñador bla bla...',
            'area' => 'diseño',
            'city' => 'Madrid',
            'typeWorkday' => 'total',
            'requirements' => 'Se requiere saber Photoshop...',
            'status' => 'cerrado',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idCompany' => 1
        ));

        DB::table('offers')->insert(array(
            'name' => 'Recepcionista de hotel',
            'description' => 'Recepcionista con idiomas...',
            'area' => 'turismo',
            'city' => 'Bilbao',
            'typeWorkday' => 'total',
            'requirements' => 'Se requiere saber inglés, alemán, francés...',
            'status' => 'cerrado',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idCompany' => 1
        ));

        DB::table('offers')->insert(array(
            'name' => 'Profesor matemáticas',
            'description' => 'Profesor para enseñar matemáticas de primero de bachillerato...',
            'area' => 'magisterio',
            'city' => 'Valencia',
            'typeWorkday' => 'total',
            'requirements' => 'Se requiere saber matemáticas',
            'status' => 'cerrado',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'idCompany' => 1
        ));
        
        $this->command->info('Table offers filled');
    }
}
