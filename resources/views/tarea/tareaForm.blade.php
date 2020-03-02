@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nueva Tarea</div>

                <div class="container card-body">
                
                @if(isset($tarea))
                <form ACTION="{{ route('tarea.update', $tarea->id)}}" method="POST">
                @method('PATCH')
                @else
                <form ACTION="{{ route('tarea.store')}}" method="POST">
                @endif
                        @csrf
                        <div class="form-group">
                            <label for="NombreForm">Nombre de la tarea</label>
                            <input type="text" class="form-control" id="NombreForm" name="tarea" placeholder="Ej: Tarea 1" value="{{$tarea->tarea??''}}" required>
                        </div>
                        <div class="form-group">
                            <label for="PrioridadForm">Prioridad</label>
                            <select class="form-control" id="PrioridadForm" name="prioridad" >
                            <option {{ isset($tarea) && $tarea->prioridad == 1 ? 'selected' : ''}} >1</option>
                            <option {{ isset($tarea) && $tarea->prioridad == 2 ? 'selected' : ''}}>2</option>
                            <option {{ isset($tarea) && $tarea->prioridad == 3 ? 'selected' : ''}}>3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ComentarioForm">Descripcion</label>
                            <textarea class="form-control" id="ComentarioForm" name="descripcion" rows="6">{{$tarea->descripcion??''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="FechaDeEntrega">Fecha de entrega</label>
                            <input type="date" class="form-control" id="FechaDeENtrega" name="fecha_entrega" value="{{$tarea->fecha_entrega??''}}"></input>
                        </div>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection