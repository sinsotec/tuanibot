<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PreguntasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('preguntas')->delete();
        
        \DB::table('preguntas')->insert(array (
            0 => 
            array (
                'id' => 2,
                'cuestionario_id' => 2,
                'pregunta' => 'Sueles iniciar tus amistades por redes sociales o medios de internet?',
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:25:14',
                'updated_at' => '2021-04-11 16:25:14',
                'position' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'cuestionario_id' => 2,
                'pregunta' => 'Es frecuente que te decepciones de las personas que conoces?',
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:25:37',
                'updated_at' => '2021-04-11 16:25:37',
                'position' => 2,
            ),
            2 => 
            array (
                'id' => 4,
                'cuestionario_id' => 2,
                'pregunta' => 'Te cuesta ser el centro de atención?',
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:25:47',
                'updated_at' => '2021-04-11 16:25:47',
                'position' => 3,
            ),
            3 => 
            array (
                'id' => 5,
                'cuestionario_id' => 2,
                'pregunta' => 'Te es difícil comunicarle a los demás lo que sientes?',
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:26:00',
                'updated_at' => '2021-04-11 16:26:00',
                'position' => 4,
            ),
            4 => 
            array (
                'id' => 6,
                'cuestionario_id' => 2,
                'pregunta' => 'Cuando tomas una decisión es fácil que te convenzan que cambie de parecer?',
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:26:08',
                'updated_at' => '2021-04-11 16:26:08',
                'position' => 5,
            ),
            5 => 
            array (
                'id' => 7,
                'cuestionario_id' => 2,
                'pregunta' => 'Si en un restaurant te traen una orden equivocada, lo reclamarías?',
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:26:16',
                'updated_at' => '2021-04-11 16:26:16',
                'position' => 6,
            ),
            6 => 
            array (
                'id' => 8,
                'cuestionario_id' => 2,
                'pregunta' => 'Si las otras personas toman decisiones, las sigues facilmente?',
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:26:23',
                'updated_at' => '2021-04-11 16:26:23',
                'position' => 7,
            ),
            7 => 
            array (
                'id' => 9,
                'cuestionario_id' => 2,
                'pregunta' => 'Es más cómodo para ti, si la responsabilidad de liderar es de otra persona?',
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:26:32',
                'updated_at' => '2021-04-11 16:26:32',
                'position' => 8,
            ),
            8 => 
            array (
                'id' => 10,
                'cuestionario_id' => 2,
                'pregunta' => 'Sueles pasar mucho tiempo en redes sociales?',
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:26:43',
                'updated_at' => '2021-04-11 16:26:43',
                'position' => 9,
            ),
            9 => 
            array (
                'id' => 11,
                'cuestionario_id' => 2,
                'pregunta' => 'Si una persona te lastima, sueles pretender que no pasó nada para evitar mayores problemas?',
                'idioma_id' => 'es',
                'created_at' => '2021-04-11 16:26:46',
                'updated_at' => '2021-04-11 16:26:46',
                'position' => 10,
            ),
            10 => 
            array (
                'id' => 12,
                'cuestionario_id' => 12,
                'pregunta' => 'Verdadero o falso: Antes de poder usar los recursos de Azure, tiene que comprar una cuenta de Azure.',
                'idioma_id' => 'es',
                'created_at' => '2022-03-27 03:12:28',
                'updated_at' => '2022-03-27 03:12:28',
                'position' => 1,
            ),
            11 => 
            array (
                'id' => 13,
                'cuestionario_id' => 12,
                'pregunta' => '¿Qué significa "informática en la nube"?',
                'idioma_id' => 'es',
                'created_at' => '2022-03-27 03:13:50',
                'updated_at' => '2022-03-27 03:13:50',
                'position' => 2,
            ),
            12 => 
            array (
                'id' => 14,
                'cuestionario_id' => 13,
                'pregunta' => 'El valor de pi es:',
                'idioma_id' => 'es',
                'created_at' => '2022-03-29 04:40:25',
                'updated_at' => '2022-03-29 04:40:25',
                'position' => 1,
            ),
            13 => 
            array (
                'id' => 15,
                'cuestionario_id' => 13,
                'pregunta' => 'La formula del agua es:',
                'idioma_id' => 'es',
                'created_at' => '2022-03-29 04:45:01',
                'updated_at' => '2022-03-29 04:45:01',
                'position' => 2,
            ),
            14 => 
            array (
                'id' => 16,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las siguientes no es una característica de la informática en la nube?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 16:15:28',
                'updated_at' => '2022-04-01 16:15:28',
                'position' => 3,
            ),
            15 => 
            array (
                'id' => 17,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las opciones siguientes no es una categoría de informática en la nube?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 16:26:39',
                'updated_at' => '2022-04-01 16:26:39',
                'position' => 4,
            ),
            16 => 
            array (
                'id' => 18,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las afirmaciones siguientes es cierta?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 16:29:05',
                'updated_at' => '2022-04-01 16:29:05',
                'position' => 5,
            ),
            17 => 
            array (
                'id' => 19,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las opciones siguientes no es un tipo de informática en la nube?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 16:31:57',
                'updated_at' => '2022-04-01 16:31:57',
                'position' => 6,
            ),
            18 => 
            array (
                'id' => 20,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las siguientes opciones no es una ventaja de usar servicios en la nube?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 16:34:18',
                'updated_at' => '2022-04-01 16:34:18',
                'position' => 7,
            ),
            19 => 
            array (
                'id' => 21,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las siguientes opciones se puede usar para administrar la gobernanza en varias suscripciones de Azure?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 16:45:16',
                'updated_at' => '2022-04-01 16:45:16',
                'position' => 8,
            ),
            20 => 
            array (
                'id' => 22,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las siguientes opciones es una unidad lógica de servicios de Azure vinculada a una cuenta de Azure?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 16:48:08',
                'updated_at' => '2022-04-01 16:48:08',
                'position' => 9,
            ),
            21 => 
            array (
                'id' => 23,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las características siguientes no se aplica a los grupos de recursos?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 16:50:49',
                'updated_at' => '2022-04-01 16:50:49',
                'position' => 10,
            ),
            22 => 
            array (
                'id' => 24,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las siguientes afirmaciones sobre una suscripción de Azure es válida?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 16:56:21',
                'updated_at' => '2022-04-01 16:56:21',
                'position' => 11,
            ),
            23 => 
            array (
                'id' => 25,
                'cuestionario_id' => 12,
                'pregunta' => '¿Qué recurso de Azure Compute se puede implementar para administrar un conjunto de máquinas virtuales idénticas?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 18:11:06',
                'updated_at' => '2022-04-01 18:11:06',
                'position' => 12,
            ),
            24 => 
            array (
                'id' => 26,
                'cuestionario_id' => 12,
            'pregunta' => '¿Cuál de los siguientes servicios deben usarse cuando la preocupación principal es realizar un trabajo en respuesta a un evento (a menudo a través de un comando REST) que necesita una respuesta en unos segundos?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 18:18:46',
                'updated_at' => '2022-04-01 18:18:46',
                'position' => 13,
            ),
            25 => 
            array (
                'id' => 27,
                'cuestionario_id' => 12,
                'pregunta' => 'La empresa tiene un equipo de trabajadores remotos que necesitan usar software basado en Windows para desarrollar las aplicaciones, pero los miembros del equipo usan diversos sistemas operativos, como macOS, Linux y Windows. ¿Qué servicio de Azure Compute le ayudaría a resolver este escenario?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 18:20:35',
                'updated_at' => '2022-04-01 18:20:35',
                'position' => 14,
            ),
            26 => 
            array (
                'id' => 28,
                'cuestionario_id' => 12,
                'pregunta' => 'Una empresa desea crear un túnel de comunicación seguro entre sus sucursales. ¿Cuál de las siguientes tecnologías no se puede usar?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 18:23:06',
                'updated_at' => '2022-04-01 18:25:42',
                'position' => 15,
            ),
            27 => 
            array (
                'id' => 29,
                'cuestionario_id' => 12,
                'pregunta' => 'Una empresa quiere usar Azure ExpressRoute para conectar su red local a la nube de Microsoft. ¿Cuál de las siguientes opciones no es un modelo de ExpressRoute que la empresa pueda usar?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 18:30:03',
                'updated_at' => '2022-04-01 18:30:03',
                'position' => 16,
            ),
            28 => 
            array (
                'id' => 30,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las siguientes opciones puede usar para vincular redes virtuales?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 18:32:08',
                'updated_at' => '2022-04-01 18:32:08',
                'position' => 17,
            ),
            29 => 
            array (
                'id' => 31,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las siguientes opciones no es una de las ventajas de ExpressRoute?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-01 18:43:09',
                'updated_at' => '2022-04-01 18:43:09',
                'position' => 18,
            ),
            30 => 
            array (
                'id' => 32,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál es el primer paso que se debe llevar a cabo para compartir un archivo de imagen como blob en Azure Storage?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 20:45:14',
                'updated_at' => '2022-04-06 20:50:20',
                'position' => 19,
            ),
            31 => 
            array (
                'id' => 33,
                'cuestionario_id' => 12,
                'pregunta' => '¿Qué opción de Azure Storage es mejor para almacenar datos para copias de seguridad y restauración, recuperación ante desastres y archivado?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 20:51:47',
                'updated_at' => '2022-04-06 20:51:47',
                'position' => 20,
            ),
            32 => 
            array (
                'id' => 34,
                'cuestionario_id' => 12,
                'pregunta' => 'El equipo de desarrollo está interesado en escribir aplicaciones basadas en Graph que se aprovechen de las ventajas de la API de Gremlin. ¿Qué opción sería la más adecuada para ese escenario?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 20:54:37',
                'updated_at' => '2022-04-06 20:54:37',
                'position' => 21,
            ),
            33 => 
            array (
                'id' => 35,
                'cuestionario_id' => 12,
                'pregunta' => 'Una empresa usa la pila LAMP para varios de sus sitios web. ¿Qué opción sería la más adecuada para la migración?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 20:58:07',
                'updated_at' => '2022-04-06 20:59:45',
                'position' => 22,
            ),
            34 => 
            array (
                'id' => 36,
                'cuestionario_id' => 12,
                'pregunta' => 'Una empresa tiene millones de entradas de registro que quiere analizar. ¿Qué opción sería la más adecuada para el análisis?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 21:01:57',
                'updated_at' => '2022-04-06 21:01:57',
                'position' => 23,
            ),
            35 => 
            array (
                'id' => 37,
                'cuestionario_id' => 12,
                'pregunta' => 'Una empresa desea crear una nueva caseta de votación para venderla a los gobiernos de todo el mundo. ¿Qué tecnologías de IoT debería elegir la empresa para garantizar el mayor grado de seguridad?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 21:09:23',
                'updated_at' => '2022-04-06 21:09:23',
                'position' => 24,
            ),
            36 => 
            array (
                'id' => 38,
                'cuestionario_id' => 12,
                'pregunta' => 'Una empresa quiere administrar rápidamente sus dispositivos de IoT individuales mediante una interfaz de usuario basada en Internet. ¿Qué tecnología de IoT debe elegir?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 21:16:06',
                'updated_at' => '2022-04-06 21:16:06',
                'position' => 25,
            ),
            37 => 
            array (
                'id' => 39,
                'cuestionario_id' => 12,
                'pregunta' => 'Quiere enviar mensajes desde el dispositivo de IoT a la nube y viceversa. ¿Qué tecnología de IoT permite enviar y recibir mensajes?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 21:18:19',
                'updated_at' => '2022-04-06 21:18:19',
                'position' => 26,
            ),
            38 => 
            array (
                'id' => 40,
                'cuestionario_id' => 12,
                'pregunta' => 'Debe predecir el comportamiento futuro a partir de acciones anteriores. ¿Qué opción de producto debe seleccionar como candidato?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 21:22:36',
                'updated_at' => '2022-04-06 21:22:36',
                'position' => 27,
            ),
            39 => 
            array (
                'id' => 41,
                'cuestionario_id' => 12,
                'pregunta' => 'Debe crear una interfaz de equipo humano mediante el lenguaje natural para responder a las preguntas de los clientes. ¿Qué opción de producto debe seleccionar como candidato?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 21:26:00',
                'updated_at' => '2022-04-06 21:26:00',
                'position' => 28,
            ),
            40 => 
            array (
                'id' => 42,
                'cuestionario_id' => 12,
                'pregunta' => 'Debe identificar el contenido de las imágenes de productos para crear automáticamente etiquetas alternativas para las imágenes con el formato correcto. ¿Qué opción de producto es la mejor candidata?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 21:28:30',
                'updated_at' => '2022-04-06 21:28:30',
                'position' => 29,
            ),
            41 => 
            array (
                'id' => 43,
                'cuestionario_id' => 12,
                'pregunta' => 'Debe procesar los mensajes de una cola, analizarlos mediante alguna lógica imperativa existente escrita en Java y, después, enviarlos a una API de terceros. ¿Qué opción sin servidor debería elegir?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 21:34:20',
                'updated_at' => '2022-04-06 21:34:20',
                'position' => 30,
            ),
            42 => 
            array (
                'id' => 44,
                'cuestionario_id' => 12,
                'pregunta' => 'Quiere orquestar un flujo de trabajo con las API de varios servicios conocidos. ¿Cuál es la mejor opción para este escenario?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 21:42:13',
                'updated_at' => '2022-04-06 21:42:13',
                'position' => 31,
            ),
            43 => 
            array (
                'id' => 45,
                'cuestionario_id' => 12,
                'pregunta' => 'Su equipo no tiene mucha experiencia escribiendo código personalizado, pero ve un gran valor en la automatización de diversos procesos empresariales importantes. ¿Cuál de las siguientes opciones es la mejor opción para el equipo?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 21:43:31',
                'updated_at' => '2022-04-06 21:43:31',
                'position' => 32,
            ),
            44 => 
            array (
                'id' => 46,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las siguientes opciones no se utilizaría para automatizar un proceso de CI/CD?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 21:45:39',
                'updated_at' => '2022-04-06 21:45:39',
                'position' => 33,
            ),
            45 => 
            array (
                'id' => 47,
                'cuestionario_id' => 12,
                'pregunta' => '¿Qué servicio podría ayudarle a administrar las máquinas virtuales que los desarrolladores y los evaluadores necesitan para asegurarse de que la nueva aplicación funciona en diferentes sistemas operativos?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 22:13:34',
                'updated_at' => '2022-04-06 22:13:34',
                'position' => 34,
            ),
            46 => 
            array (
                'id' => 48,
                'cuestionario_id' => 12,
                'pregunta' => '¿A qué servicio le faltan características para asignar tareas de desarrolladores individuales en las que trabajar?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 22:26:28',
                'updated_at' => '2022-04-06 22:26:28',
                'position' => 35,
            ),
            47 => 
            array (
                'id' => 49,
                'cuestionario_id' => 12,
                'pregunta' => '¿Cuál de las siguientes opciones no se utilizaría para automatizar un proceso de CI/CD?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 22:58:07',
                'updated_at' => '2022-04-06 22:58:07',
                'position' => 36,
            ),
            48 => 
            array (
                'id' => 50,
                'cuestionario_id' => 12,
                'pregunta' => '¿Qué servicio podría ayudarle a administrar las máquinas virtuales que los desarrolladores y los evaluadores necesitan para asegurarse de que la nueva aplicación funciona en diferentes sistemas operativos?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 23:01:09',
                'updated_at' => '2022-04-06 23:01:09',
                'position' => 37,
            ),
            49 => 
            array (
                'id' => 51,
                'cuestionario_id' => 12,
                'pregunta' => '¿A qué servicio le faltan características para asignar tareas de desarrolladores individuales en las que trabajar?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 23:05:54',
                'updated_at' => '2022-04-06 23:05:54',
                'position' => 38,
            ),
            50 => 
            array (
                'id' => 52,
                'cuestionario_id' => 12,
                'pregunta' => 'Quiere recibir una alerta cuando haya disponibles nuevas recomendaciones para mejorar su entorno de nube. ¿Qué servicio puede hacer esto?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 23:08:07',
                'updated_at' => '2022-04-06 23:08:07',
                'position' => 39,
            ),
            51 => 
            array (
                'id' => 53,
                'cuestionario_id' => 12,
            'pregunta' => '¿Qué servicio ofrece un análisis oficial de la causa principal (RCA) de la interrupción en los incidentes de Azure?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 23:10:55',
                'updated_at' => '2022-04-06 23:10:55',
                'position' => 40,
            ),
            52 => 
            array (
                'id' => 54,
                'cuestionario_id' => 12,
                'pregunta' => '¿Qué servicio es una plataforma en la que se basa Application Insights y permite la supervisión de máquinas virtuales, contenedores y Kubernetes?',
                'idioma_id' => 'es',
                'created_at' => '2022-04-06 23:22:54',
                'updated_at' => '2022-04-06 23:22:54',
                'position' => 41,
            ),
        ));
        
        
    }
}