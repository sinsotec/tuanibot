<?php
namespace App\Conversations;

use App\Models\Conclusiones;
use App\Models\Pregunta;
use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\Drivers\Telegram\Extensions\Keyboard;
use BotMan\Drivers\Telegram\Extensions\KeyboardButton;


use App\Models\Cuestionario;

class Encuesta extends Conversation
{
    protected $msgId;
    protected $puntaje = 0;
    protected $preguntas = array();
    protected $respuestas = array();
    protected $preguntasErradas = "";
    protected $cuestionario;
    protected $pregunta;
    protected $textoPregunta;
    protected $cantidad_preguntas = 5;
    protected $posicionCuestionario;
    protected $posicionPregunta;
    protected $posicionRespuesta;
    protected $conclusiones = array();
    protected $inlineKeyboard;
    protected $letras = ['🇦', '🇧', '🇨', '🇩', '🇪', '🇫', '🇬'];
    protected $numeros = ['0️⃣', '1️⃣', '2️⃣', '3️⃣', '4️⃣', '5️⃣', '6️⃣', '7️⃣'];
    

    
    public function run()
    {
        $this->iniciar();
    }

    protected function iniciar(){
        $this->bot->typesAndWaits(1);
        $this->say('Me alegra que quieras ponerte a prueba, dejame mostrarte unos test:');
            $this->elegirCuestionarios(Cuestionario::where('activo', 1)->get());
    }

    protected function elegirCuestionarios($cuestionarios){
        if(count($cuestionarios) == 0){
            $this->say('Oops! al parece no tengo ninguno disponible.');
        }else{$this->pregunta = Question::create('Elige un test:');
            foreach ($cuestionarios as $key => $cuestionario){
                $this->pregunta->addButton(Button::create("🔘  ". $cuestionario->titulo)->value($key));
            }
            $this->ask($this->pregunta, function($answer) use ($cuestionarios){
                if($answer->isInteractiveMessageReply()){
                    $this->say("*Has elegido:*\n\n" . "🔹  " . $cuestionarios[$answer->getText()]->descripcion . "  🔹", ['parse_mode' => 'MarkdownV2']);
                    //$this->bot->typesAndWaits(1);
                    $this->preguntarSioNo('*Quieres continuar?*');
                    $this->cuestionario = $cuestionarios[$answer->getText()];
                    //$this->bot->typesAndWaits(0.5);
                    $this->ask($this->pregunta, function($answer){
                        if($answer->isInteractiveMessageReply()){
                            if ($answer->getValue() == 'si') {
                                $this->posicionPregunta = 0;
                                //$this->bot->typesAndWaits(0.5);
                                $this->say("Excelente, voy a presentarte $this->cantidad_preguntas preguntas aleatorias.");
                                //$this->bot->typesAndWaits(0.5);
                                $this->say('❗️__*Empecemos*__❗️', ['parse_mode' => 'MarkdownV2']);
                                $this->preguntas = Pregunta::where('cuestionario_id', $this->cuestionario->id)
                                                    ->inRandomOrder()->limit($this->cantidad_preguntas)->get()->load('respuestas');
                                if(count($this->preguntas) > 0){
                                    $this->hacerPreguntas();
                                }else
                                    $this->say('Oops! este test no tiene preguntas.');
                            }else{
                                $this->say('Está bien iniciemos de nuevo.');
                                $this->iniciar();
                            }
                        }else{
                            $this->usaLosBotones();
                        }
                    }, $this->inlineKeyboard
                );
                }else{
                    $this->usaLosBotones();
                }
            });
        };
    }

    protected function hacerPreguntas(){
        $this->respuestas = $this->preguntas[$this->posicionPregunta]->respuestas;
        $texto = "*PREGUNTA* " . $this->numeros[$this->posicionPregunta + 1] . "\n\n*" . $this->preguntas[$this->posicionPregunta]->pregunta . "*\n\n";
        $this->textoPregunta = $texto;
        foreach($this->respuestas as $key=>$respuesta)
            $texto = $texto . "▶️ *Opción* ". $this->letras[$key] . "\n\n\t\t\t- " . $respuesta->respuesta . "\n\n";
        $texto = $texto . "*- Elige la opción correcta:*";
        $this->pregunta =  $texto;
        $this->generarRespuestas();
        $this->bot->typesAndWaits(0.9);
        $this->ask($this->pregunta, function($answer){
                if($answer->isInteractiveMessageReply()){
                    $this->posicionPregunta++;
                    $this->puntaje += intval($answer->getText());
                    if(intval($answer->getText()) == 0){
                        $this->preguntasErradas .= $this->textoPregunta;
                    }
                    $this->guardarLog();
                    $this->deleteMsg();
                    $this->bot->typesAndWaits(0.9);
                    if(count($this->preguntas) > $this->posicionPregunta){
                        $this->hacerPreguntas();
                    }else{
                        if(!empty($this->preguntasErradas)){
                            $this->say("*Preguntas incorrectas:*\n\n" . $this->preguntasErradas, ['parse_mode' => 'Markdown']);
                        }
                        $this->say("*Tú resultado ha sido:*\nPreguntas correctas: $this->puntaje  ✅\nPreguntas incorrectas: " . ($this->posicionPregunta - $this->puntaje) . " ❌", ['parse_mode' => 'Markdown']);
                        //$this->say($this->mostrarConclusiones());
                    };
                }else{
                    $this->usaLosBotones();
                }
            }, $this->inlineKeyboard
        );
    }

    protected function generarRespuestas(){
        $this->respuestas = $this->preguntas[$this->posicionPregunta]->respuestas;
            foreach($this->respuestas as $key=>$respuesta){
                /* if($respuesta->puntaje == '0')
                    $respuesta->puntaje = '00'; */
                $botones[$key] = KeyboardButton::create("🔘 ". $this->letras[$key])->callbackData($respuesta->puntaje);
            };
            $this->crearBotones($botones);    
    }

    protected function mostrarConclusiones(){
        $cuestionario = $this->cuestionario->load('conclusiones');
        return  $this->buscarConclusion($cuestionario->conclusiones->sortByDesc('puntuacion_min')->values());
    }

    protected function buscarConclusion($conclusiones){        
        foreach ($conclusiones as $conclusion){
            if($this->puntaje >= $conclusion->puntuacion_min){
                return $conclusion->conclusion;
            } 
        }
    }

    protected function usaLosBotones(){
        $this->say("Por favor usa los botones.\nSi quieres terminar escribe: salir");
        $this->deleteMsg(1);
        $this->repeat();
    }

    protected function preguntarSioNo($msg){
        $botones = array(KeyboardButton::create('✅ SI')->callbackData('si'), KeyboardButton::create('❌ NO')->callbackData('no'));
        $this->pregunta = $msg;
        $this->crearBotones($botones);                            
    }

    /* protected function respuestaDemasiadoLarga($respuestas){
        foreach($respuestas as $respuesta){
            if(strlen($respuesta->respuesta) > 38){
                return true;
            }
        };
        return false;
    } */

    protected function crearBotones($botones){
        $this->inlineKeyboard = Keyboard::create()
                                    ->type(Keyboard::TYPE_INLINE)
                                    ->oneTimeKeyboard(true)
                                    ->resizeKeyboard(false)
                                    ->addRow($botones[0]);          
        array_shift($botones);
        foreach($botones as $boton){
            $this->inlineKeyboard = $this->inlineKeyboard->addSameRow(0, $boton);      
        };
        $this->inlineKeyboard = $this->inlineKeyboard->toArray(); 
    }

    protected function deleteMsg($pos = 0){
        $msgId = $this->bot->getMessage()->getPayload();
                     $apiParameters = [
                        'chat_id' => json_encode($msgId['chat']['id']),//'412668735',
                        'message_id' => json_encode($msgId['message_id'] - $pos),
                        ];  
        $this->msgId  =  $this->bot->sendRequest('deleteMessage',$apiParameters);
        //$this->guardarDeletedLog();
    }

    protected function dice(){
        $msgId = $this->bot->getMessage()->getPayload();
        $apiParameters = [
            'chat_id' => json_encode($msgId['chat']['id']), 
            ]; 
        $this->bot->sendRequest('sendDice',$apiParameters);
        $this->guardarLog();
    }

    protected function guardarLog(){
        $msg = json_encode($this->bot->getMessage()->getPayload()) . "\n";
        $this->msgId = json_encode($this->msgId);
        $file = fopen('/home/uroonlin/azurebotdata/database/msglogs.txt', 'a');
        fwrite($file, $msg);
        fclose($file);
        //$file = fopen('../deletelogs.txt', 'a');
        //fwrite($file, $this->msgId);
        //fclose($file);
    }

    protected function guardarDeletedLog(){
        $this->msgId = json_encode($this->msgId) . "\n";
        $file = fopen('../deletelogs.txt', 'a');
        fwrite($file, $this->msgId);
        fclose($file);
    }
    
}

