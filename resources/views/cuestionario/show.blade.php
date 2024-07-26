{{-- @extends('layouts.app') --}}
@extends('adminlte::page')

@section('title', 'Cuestionarios')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">           
            <a href="/cuestionarios" class="btn">< back</a>
            <h1>Cuestionario</h1>  

            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/cuestionarios/{{ $cuestionario->id }}">Preguntas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/cuestionarios/{{ $cuestionario->id }}/conclusiones">Conclusiones</a>
                </li>
              </ul>


            <div class="card">
                <div class="row card-header">
                    <h4 class="col">{{ __($cuestionario->titulo) }}</h4>
                    <h5 class="col-auto align-self-center">Prioridad: {{ __($cuestionario->prioridad) }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ __($cuestionario->descripcion) }}</p>
                    <div class="row">
                        <form class="col" action="/cuestionarios/{{ $cuestionario->id }}" method="POST">
                            @method('delete')    
                            @csrf
                            <a class="btn btn-primary" href="/cuestionarios/{{ $cuestionario->id }}/preguntas/create">Agregar pregunta</a>
                            <a class="btn btn-info" href="/cuestionarios/{{ $cuestionario->id }}/edit"><i class="fas fa-pencil-alt"></i></a>
                            <button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                        </form>
                        <a class="btn btn-primary col-auto align-self-center" href="/cuestionarios/{{ $cuestionario->id }}/clone"><i class="fas fa-clone"></i></a>

                    </div>
                </div>
            </div> 

            <div class="row">
                <h2 class="col">Preguntas:</h2>
                <h3 class="col">Cantidad: {{ count($cuestionario->preguntas) }}</h3>
            </div>            
            <ul class="group-list p-0">
                @forelse($cuestionario->preguntas as $pregunta)
                    <li class="list-group-item">
                        <div id="accordion" >
                            <div class="card mb-0">
                                <div class="card-header">
                                    <h3 class="card-title text-justify">{{ $pregunta->position}}) {{ __($pregunta->pregunta) }} </h3>
                                    <button class="btn btn-link-dark collapsed w-100" data-toggle="collapse" data-target="#collapse{{ $loop->index + 1 }}" aria-expanded="true" aria-controls="collapse{{ $loop->index + 1 }}">
                                        <i class="fas fa-arrow-down badge-primary badge-pill p-1"></i>
                                    </button>
                                    <span class="badge badge-secondary badge-pill float-right">Respuestas: {{ count($pregunta->respuestas) }}</span>  
                                </div>
                                <div class="collapse" id="collapse{{ $loop->index + 1 }}" class="collapse" aria-labelledby="heading{{ $loop->index + 1 }}" data-parent="#accordion">
                                    <div class="card-body" >
                                        <form class="row justify-content-end" action="/cuestionarios/preguntas/{{ $pregunta->id }}" method="POST">
                                            @method('delete')    
                                            @csrf
                                            <a class="btn btn-primary m-1" href="/cuestionarios/preguntas/{{ $pregunta->id }}/respuestas/create">Agregar respuesta</a>
                                            <a class="btn btn-info m-1" href="/cuestionarios/preguntas/{{ $pregunta->id }}/edit"><i class="fas fa-pencil-alt"></i></a>
                                            <button class="btn btn-danger m-1" ><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                        <h3>Respuestas</h3>
                                            
                                        <ul class="list-group">   
                                            @forelse ($pregunta->respuestas as $respuesta)
                                                <li class="list-group-item"><input class="border-0 form-control input-lg" id="respuesta{{ $loop->index }}" type="text" value="{{ $respuesta->respuesta }} -- {{ $respuesta->puntaje }}" readonly>
                                                    <form class="float-right" action="/cuestionarios/{{ $cuestionario->id }}/respuestas/{{ $respuesta->id }}" method="POST">
                                                        @method('delete')  
                                                        @csrf
                                                        {{-- <a class="btn btn-info" href="#" onclick="editarRespuesta({{ $loop->index }})"><i class="fas fa-pencil-alt"></i></a> --}}
                                                    <button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </li>
                                            @empty
                                            
                                                <li class="list-group-item">No tiene respuestas</li>
                                            
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @empty
                    <div class="card">
                        <p class="card-header">No hay preguntas</p>
                    </div>
                @endforelse
            </ul>
            

        </div>
    </div>
</div>
@endsection
