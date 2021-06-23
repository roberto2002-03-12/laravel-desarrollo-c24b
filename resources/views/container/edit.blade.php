@extends('layouts.app')

@section('content')
<div class="container">
    <div id="table">
        <br><br>
        <h1>
            Editar Container
        </h1>
        <br><br>
        <form action="{{ url('/container/'.$container->id) }}" id="form" method="post">
            @csrf
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="tipo_producto"> Tipo de Producto </label>
                <input type="text" class="form-control" value="{{ $container['tipo_producto'] }}" name="tipo_producto" id="tipo_producto">
                <br>
            </div>
            <div class="form-group">
                <label for="dimensiones"> Dimensiones </label>
                <input type="text" class="form-control" value="{{ $container['dimensiones'] }}" name="dimensiones" id="dimensiones">
                <br>
            </div>
            <div class="form-group">
                <label for="id_embarcacion"> ID Embarcacion </label>
                <input type="number" class="form-control" value="{{ $container['id_embarcacion'] }}" name="id_embarcacion" id="id_embarcacion">
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