<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;
use App\Models\Respuesta;


class RespuestaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(Pregunta $pregunta)
    {
        return view('respuesta.create', compact('pregunta'));
    }

    public function store(Pregunta $pregunta)
    {
         
         $data =request()->validate([
                'respuesta.respuesta' => 'required',
                'respuesta.puntaje' => 'required'
        ]);  
        
        $pregunta->respuestas()->create($data['respuesta']);
        return redirect('/cuestionarios/preguntas/' . $pregunta->id . '/respuestas/create' )->withErrors(['msg' => 'created']);
    }

    public function destroy(\App\Models\Cuestionario $cuestionario, Respuesta $respuesta)
    {

        //$cuestionario_id =  $pregunta->cuestionario_id;
       $respuesta->delete();
      return redirect('/cuestionarios/preguntas/' . $respuesta->pregunta_id . '/respuestas/create' )->withErrors(['msg' => 'deleted']);
    }
}
