@extends('layouts.app')

@section('content')
<div class="container">
    <div id="table">
        <br><br>
        <h1>
            Editar Pais
        </h1>
        <br><br>
        <form action="{{ url('/pais/'.$pais->id) }}" id="form" method="post">
            @csrf
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="nombre"> Nombre </label>
                <input type="text" class="form-control" value="{{ $pais['nombre'] }}" name="nombre" id="nombre">
                <br>
            </div>
            <div class="form-group">
                <label for="presi_actual"> Presidente actual </label>
                <input type="text" class="form-control" value="{{ $pais['presi_actual'] }}" name="presi_actual" id="presi_actual">
                <br>
            </div>
            <div class="form-group">
                <label for="fec_newpresi"> Fecha de nuevo presidente </label>
                <input type="date" class="form-control" value="{{ $pais['fec_newpresi'] }}" name="fec_newpresi" id="fec_newpresi">
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