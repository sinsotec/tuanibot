<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConclusionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('conclusiones')->delete();
        
        \DB::table('conclusiones')->insert(array (
            0 => 
            array (
                'id' => 11,
                'cuestionario_id' => 2,
                'conclusion' => 'Tienes que tener cuidado con quien te relacionas, ya que tienes tendencia a ser presa facil para que las otras personas se aprovechen de ti o intenten engañarte. Sueles ser una persona sensible, es mas comodo y seguro para ti, si alguien más te apoya y te acompaña en lo que decidas. Nunca está demás pedir ayuda o tener herramientas que te apoyen en evitar ser manipulado o engañado.',
                'puntuacion_min' => 7,
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:30:25',
                'updated_at' => '2021-04-11 16:30:25',
            ),
            1 => 
            array (
                'id' => 12,
                'cuestionario_id' => 2,
                'conclusion' => 'Tienes poder de decisión, pero si te saben llevar lograran cambiar tu forma de pensar. Te recomendamos aplicar técnicas para aumentar la seguridad en ti mismo, no dependas de nadie, puedes lograr lo que te propongas. Sal a conocer gente nueva y nunca olvides ser precavido y recuerda que siempre estan a la mano herramientas de ayuda.',
                'puntuacion_min' => 4,
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:30:49',
                'updated_at' => '2021-04-11 16:30:49',
            ),
            2 => 
            array (
                'id' => 13,
                'cuestionario_id' => 2,
                'conclusion' => 'Tienes una fuerza yoica bastante alta, gran seguridad en ti mismo y no es fácil manipularte. Eres una persona independiente y si te lo propones, preparado para liderar. Cuidado con el ego, podemos tener las mejores capacidades pero en este viaje llamado vida no se trata de competir y llegar más rápido, sino de saber utilizar las técnicas, ayudar a quien lo necesite y mantenerse disfrutando.',
                'puntuacion_min' => 0,
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:31:57',
                'updated_at' => '2021-04-11 16:31:57',
            ),
            3 => 
            array (
                'id' => 14,
                'cuestionario_id' => 13,
                'conclusion' => 'No te desanimes, sigue estudiando para acertar en las preguntas',
                'puntuacion_min' => 0,
                'idioma_id' => 'es',
                'created_at' => '2022-03-29 04:50:15',
                'updated_at' => '2022-03-29 04:50:15',
            ),
            4 => 
            array (
                'id' => 15,
                'cuestionario_id' => 13,
                'conclusion' => 'Has respondido algunas preguntas de forma correcta, sigue esforzandote, lo lograras!!!',
                'puntuacion_min' => 1,
                'idioma_id' => 'es',
                'created_at' => '2022-03-29 04:51:06',
                'updated_at' => '2022-03-29 04:52:26',
            ),
            5 => 
            array (
                'id' => 16,
                'cuestionario_id' => 13,
                'conclusion' => 'Felicidades sos un crack respondiendo!!!',
                'puntuacion_min' => 2,
                'idioma_id' => 'es',
                'created_at' => '2022-03-29 04:53:01',
                'updated_at' => '2022-03-29 04:53:01',
            ),
        ));
        
        
    }
}