@extends('layouts.app')

@section('content')
<div class="container">
    <div id="table">
        <br><br>
        <h1>
            Editar Embarcacion
        </h1>
        <br><br>
        <form action="{{ url('/embarcacion/'.$embarcacion->id) }}" id="form" method="post">
            @csrf
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="cantidad_tripu"> Cantidad de Tripulación </label>
                <input type="number" class="form-control" name="cantidad_tripu" id="cantidad_tripu" value="{{ $embarcacion['cantidad_tripu'] }}">
                <br>
            </div>
            <div class="form-group">
                <label for="destino"> Destino </label>
                <input type="text" class="form-control" name="destino" id="destino" value="{{ $embarcacion['destino'] }}">
                <br>
            </div>
            <div class="form-group">
                <label for="inicio"> Fecha estimida de Partición </label>
                <input type="date" class="form-control" name="inicio" id="inicio" value="{{ $embarcacion['inicio'] }}">
                <br>
            </div>
            <div class="form-group">
                <label for="llegada"> Fecha estimida de Arribación </label>
                <input type="date" class="form-control" name="llegada" id="llegada" value="{{ $embarcacion['llegada'] }}">
                <br>
            </div>
            <div class="form-group">
                <label for="nro_comunicacion"> Número de Comunicación de la embarcación </label>
                <input type="number" class="form-control" name="nro_comunicacion" id="nro_comunicacion" value="{{ $embarcacion['nro_comunicacion'] }}">
                <br>
            </div>
            <div class="form-group">
                <input type="submit" class="form-control" value="Guardar datos">
                <br>
            </div>
        </form>
    </div>
</div>
@endsection