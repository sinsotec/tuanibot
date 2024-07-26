@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="/cuestionarios/{{ $pregunta->cuestionario_id }}" class="btn">< back</a>
            <div class="card">
                <div class="card-header">
                    {{ __('Crear nueva respuesta') }}
                </div>
                <div class="card-body">
                   <form action="/cuestionarios/preguntas/{{ $pregunta->id }}/respuestas" method="POST">
                        @csrf
                        <p class="card-text">{{ $pregunta->pregunta }}</label>
                        <div class="form-group">
                            <div>
                                <label for="pregunta">Respuesta</label>
                            <input name="respuesta[respuesta]" type="text" class="form-control" id="respuesta"
                                    aria-describedby="ayudaRespuesta" placeholder="Ingresa la respuesta" value="{{old('respuesta.respuesta')}}">
                            <small id="ayudaRespuesta" class="form-text text-muted">Escribe la respuesta</small>

                            @error('respuesta.respuesta')
                            <small class="text-danger">{{ __($message) }}</small>
                                
                            @enderror
                            </div>
                            <div>
                                <label for="puntaje">Puntaje</label>
                            <input name="respuesta[puntaje]" type="number" class="form-control" id="puntaje"
                                    aria-describedby="ayudaPuntaje" placeholder="Ingresa el puntaje" value="{{old('respuesta.puntaje')}}">
                            <small id="ayudaPuntaje" class="form-text text-muted">Escribe el puntaje</small>

                            @error('respuesta.puntaje')
                            <small class="text-danger">{{ __($message) }}</small>
                                
                            @enderror
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Agregar Respuesta</button>
                
                    </form>
                </div>
            </div>

            <h3>Respuestas</h3>
                                            
            <ul class="list-group">   
                @forelse ($pregunta->respuestas as $respuesta)
                    <li class="list-group-item"><input class="border-0 form-control input-lg" id="respuesta{{ $loop->index }}" type="text" value="{{ $respuesta->respuesta }} -- {{ $respuesta->puntaje }}" readonly>
                        <form class="float-right" action="/cuestionarios/{{ $pregunta->cuestionario_id }}/respuestas/{{ $respuesta->id }}" method="POST">
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
@endsection

@if($errors->first() == 'created')
    @push('js')
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: 'Respuesta creada exitosamente'
            })    
        </script>
    @endpush
@elseif($errors->first() == 'deleted')
    @push('js')
        <script>
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
            Toast.fire({
                icon: 'warning',
                title: 'Respuesta eliminada'
            })    
        </script>
    @endpush
@endif



