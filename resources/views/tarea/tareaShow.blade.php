@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles de tarea</div>
                <div class="card-body">
                    <a href="{{ route('tarea.edit', $tarea) }}" class="btn btn-warning" style="color:white;">Editar Tarea</a>
                    <hr>
                    <form action="{{ route('tarea.destroy', $tarea->id) }}" METHOD="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Borrar </button>
                    </form> 
                   
                    <div class="card-body">
                        <center><h2>{{$tarea->tarea}}</h2></center>
                        <br>
                        <p style="float:right;">Entrega: {{$tarea->fecha_entrega}}</p>
                        <br><br>
                        <p style="float:right;">Prioridad: {{$tarea->prioridad}}</p>
                       <br> <hr>
                        <textarea class="form-control" rows="6" readonly >{{$tarea->descripcion}}</textarea>
                        <br>
                        <a href="{{ route('tarea.index') }}" class="btn btn-primary">Regresar</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection