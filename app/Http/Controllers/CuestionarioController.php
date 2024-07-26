<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use App\Models\Cuestionario;

class CuestionarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $cuestionarios = Cuestionario::all();
        return view('cuestionario.index', compact('cuestionarios'));
    }
    
    public function create()
    {
        return view('cuestionario.create');
    }

    public function edit(Cuestionario $cuestionario)
    {
       return view('cuestionario.edit', compact('cuestionario'));
    }

    public function store()
    {
        $data = request()->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'prioridad' => 'required',
        ]);

        $cuestionario = Cuestionario::create($data);
    
        return redirect('/cuestionarios/'.$cuestionario->id);
    }

    public function show(Cuestionario $cuestionario)
    {

        $cuestionario->load('preguntas');

        //dd($cuestionario);

        return view('cuestionario.show', compact('cuestionario'));
    }

    public function update(Cuestionario $cuestionario)
    {
        
        $data = request()->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'activo' => 'required',

        ]);
        
        if ($cuestionario->activo != $data['activo']){
            $patch = '/cuestionarios/';
        }else{
            $patch = $patch = '/cuestionarios/' . $cuestionario->id;
        }
        
        $cuestionario->update($data);
    
        return redirect($patch);
    }

    public function destroy(Cuestionario $cuestionario)
    {

        $cuestionario->delete();

        return redirect('/cuestionarios');
    }

    public function clone(Cuestionario $cuestionario)
    {
        $cuestionario = $cuestionario->load('preguntas.respuestas');
        //dd($cuestionario);
        $new_cuestionario = $cuestionario->replicate();
        $new_cuestionario->titulo .= " clonado";
        $new_cuestionario->save();
        foreach($cuestionario->preguntas as $pregunta){
            $new_pregunta = $pregunta->replicate();
            $new_pregunta->cuestionario_id = $new_cuestionario->id;
            $new_pregunta->save();
            foreach($pregunta->respuestas as $respuesta){
                $new_respuesta = $respuesta->replicate();
                $new_respuesta->pregunta_id = $new_pregunta->id;
                $new_respuesta->save();
            }
        }
    
        return redirect('/cuestionarios/')->withErrors(['msg' => 'cloned']);
    }
}
