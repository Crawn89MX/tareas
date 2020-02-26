@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nueva Tarea</div>

                <div class="container card-body">
                <form ACTION="{{ route('tarea.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="NombreForm">Nombre de la tarea</label>
                            <input type="text" class="form-control" id="NombreForm" name="tarea" placeholder="Ej: Tarea 1">
                        </div>
                        <div class="form-group">
                            <label for="PrioridadForm">Prioridad</label>
                            <select class="form-control" id="PrioridadForm" name="prioridad">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ComentarioForm">Descripcion</label>
                            <textarea class="form-control" id="ComentarioForm" name="descripcion" rows="6"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="FechaDeEntrega">Fecha de entrega</label>
                            <input type="date" class="form-control" id="FechaDeENtrega" name="fecha_entrega"></input>
                        </div>
                        <button type="submit" class="btn btn-success">ir</button>
                    </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection