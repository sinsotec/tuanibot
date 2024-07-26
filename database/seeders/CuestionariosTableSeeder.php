<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CuestionariosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cuestionarios')->delete();
        
        \DB::table('cuestionarios')->insert(array (
            0 => 
            array (
                'id' => 2,
                'titulo' => 'Un ejemplo de encuesta',
                'descripcion' => 'Esto es para probar',
                'activo' => 0,
                'prioridad' => 100,
                'id_idioma' => 'es',
                'created_at' => '2021-04-10 03:53:57',
                'updated_at' => '2022-03-29 04:25:08',
            ),
            1 => 
            array (
                'id' => 12,
                'titulo' => 'Test AZ 900',
                'descripcion' => 'Test para la certificado AZ 900 de Microsoft Azure',
                'activo' => 1,
                'prioridad' => 100,
                'id_idioma' => 'es',
                'created_at' => '2022-03-27 00:54:07',
                'updated_at' => '2022-03-27 03:12:10',
            ),
            2 => 
            array (
                'id' => 13,
                'titulo' => 'Encuesta 3',
                'descripcion' => 'Encuesta en beta',
                'activo' => 1,
                'prioridad' => 100,
                'id_idioma' => 'es',
                'created_at' => '2022-03-29 04:32:03',
                'updated_at' => '2022-03-29 04:54:27',
            ),
        ));
        
        
    }
}