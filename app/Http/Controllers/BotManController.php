<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\Encuesta;

use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\LaravelCache;
use BotMan\BotMan\Drivers\DriverManager;

class BotManController extends Controller
{
   /**
     * Place your BotMan logic here.
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    } */
    
    
     public function handle()
    {

        $config = [
            'web' => [
                'matchingData' => [
                    'driver' => 'web',
                ],
            ], 
            'telegram' => [
                'token' => env('TELEGRAM_TOKEN'),
            ],
             'botman' => [
                'conversation_cache_time' => 10,
            ]
        ];
        
        // Load the driver(s) you want to use
        DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);
        DriverManager::loadDriver(\BotMan\Drivers\Facebook\FacebookDriver::class);
        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);
        
        // Create an instance
        $botman = BotManFactory::create($config, new LaravelCache());

        /* $botman->hears('user', function ($bot){
            $user = $bot->getUser();
            //dd($user);
            $bot->reply($user->getUsername() . " " . $user->getId() . " " . $user->getFirstName());
            //$bot->reply("hoasdf");
        }); */

        /* $botman->hears('group', function ($bot){
            $user = $bot->getUser();
            //dd($user); 
            $bot->reply("hoasdf");
            //echo($user)  ;
        }); */

        /* $botman->hears('/enviar', function($bot) use ($botman){
            $bot->reply('voy a enviarte un mensaje al privado');
            $user = $bot->getUser();
            $bot->say('hola, ' . $user->getFirstName() . ' me escribiste en el grupo',  $user->getId());
        }); */

        /* $botman->hears('1|00', function ($bot){
            $bot->reply();
        }); */

        $botman->hears('/start', function ($bot){
            $user = $bot->getUser();
            $bot->reply('Hola '. $user->getFirstName() . '!, Sí quieres poner a prueba tus conocimientos escribe: test', ['parse_mode' => 'Markdown']);
        });
        
        $botman->hears('hola|Hola|HOLA', function ($bot){
            //$bot->reply("Hola *Platzinauta!*,\n[Google](https://www.google.com/)\n Soy *Tiani* y quiero poner a prueba tus conocimientos.\nCuando estes listo escribe: *test*", ['parse_mode' => 'Markdown']);
            $bot->reply("Hola *Platzinauta!*,\nSoy *Tuani* y quiero poner a prueba tus conocimientos.\nCuando estes listo escribe: *test*", ['parse_mode' => 'Markdown']);
            
        });


        $botman->hears('dado', function ($bot){
            $msgId = $bot->getMessage()->getPayload();
            $apiParameters = [
                'chat_id' => json_encode($msgId['chat']['id']),
                ]; 
            $numero = $bot->sendRequest('sendDice',$apiParameters);
            //$message = $bot->getMessages()->getPayload();
            //$bot->reply(json_encode($message));
        });

        $botman->hears('suerte', function ($bot){
            $msgId = $bot->getMessage()->getPayload();
            $apiParameters = [
                'chat_id' => json_encode($msgId['chat']['id']),
                'emoji' => '🎯'
                ]; 
            $numero = $bot->sendRequest('sendDice',$apiParameters);
            $msg = $bot->getMessage()->getPayload();
            $this->guardarLog($msg);
            //$message = $bot->getMessages()->getPayload();
            //$bot->reply(json_encode($message));
        });
        


        $botman->hears('/salir|salir|Salir', function ($bot){
            $bot->reply('Te has salido del test');
        })->stopsConversation();

        $botman->hears('ayuda|Ayuda', function ($bot){
            $bot->reply('Escribe salir para terminar una test');
        })->skipsConversation();

        $botman->hears('test|Test', function ($bot){
            $this->startEncuesta($bot);
        });


        $botman->fallback(function($bot) {
            $message = $bot->getMessage();
            //$bot->reply('Disculpa no comprendo "' . $message->getText() . '"');
            $bot->reply('Disculpa no comprendo');
            $bot->reply('Estoy nueva en este trabajo, por ahora solo comprendo si escribes: hola, ayuda y test');
        });

        $botman->listen();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tinker()
    {
        return view('tinker');
    }

    public function guardarLog($msg){
        $msg = json_encode($msg) . "\n";
        $file = fopen('../msglogs.txt', 'a');
        fwrite($file, $msg);
        fclose($file);
    }

    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    
    public function startEncuesta(BotMan $bot)
    {
        $bot->startConversation(new Encuesta());
    }
}
