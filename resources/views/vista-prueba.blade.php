@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vista prueba</div>

                <div class="card-body">
                   
                    Hola {{ $nombre }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection