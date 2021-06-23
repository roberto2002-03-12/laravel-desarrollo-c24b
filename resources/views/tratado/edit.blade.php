@extends('layouts.app')

@section('content')
<div class="container">
    <div id="table">
        <br><br>
        <h1>
            Editar Tratado
        </h1>
        <br><br>
        <form action="{{ url('/tratado/'.$tratado->id) }}" id="form" method="post">
            @csrf
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="pais_import"> Pais importador </label>
                <input type="text" class="form-control" value="{{ $tratado['pais_import'] }}" name="pais_import" id="pais_import">
                <br>
            </div>
            <div class="form-group">
                <label for="impuesto"> Impuesto </label>
                <input type="number" step="0.01" class="form-control" value="{{ $tratado['impuesto'] }}" name="impuesto" id="impuesto">
                <br>
            </div>
            <div class="form-group">
                <label for="fec_tratado"> Fecha de tratado </label>
                <input type="date" class="form-control" value="{{ $tratado['fec_tratado'] }}" name="fec_tratado" id="fec_tratado">
                <br>
            </div>
            <div class="form-group">
                <label for="pais_export"> Pais exportador </label>
                <input type="text" class="form-control" value="{{ $tratado['pais_export'] }}" name="pais_export" id="pais_export">
                <br>
            </div>
            <div class="form-group">
                <label for="producto"> Producto </label>
                <input type="text" class="form-control" value="{{ $tratado['producto'] }}" name="producto" id="producto">
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