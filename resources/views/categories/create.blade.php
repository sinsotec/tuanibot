@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="/categories" class="btn">< back</a>
            <div class="card">
                <div class="card-header">{{ __('Crear nueva categoria') }}</div>

                <div class="card-body">
                   <form action="/caterories/" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="ayudaNombre" placeholder="Ingresa el nombre">
                            <small id="ayudaNombre" class="form-text text-muted">Agrega un nombre a la categoría</small>

                            @error('nombre')
                            <small class="text-danger">{{ __($message) }}</small>
                                
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="grupo">Grupo</label>
                            <input name="grupo" type="text" class="form-control" id="grupo" aria-describedby="ayudagrupo" placeholder="Ingresa el nombre del grupo de Telegram">
                            <small id="ayudaDescripcion" class="form-text text-muted">Ingresa la descripcion</small>

                            @error('descripcion')
                            <small class="text-danger">{{ __($message) }}</small>
                                
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="prioridad">Prioridad</label>
                            <input name="prioridad" type="number" class="form-control col-1" id="prioridad" aria-describedby="ayudaPrioridad" placeholder="Agrega una Prioridad" value="100">
                            <small id="ayudaPrioridad" class="form-text text-muted">Ingresa la prioridad</small>

                            @error('prioridad')
                            <small class="text-danger">{{ __($message) }}</small>
                                
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Crear Cuestionario</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
