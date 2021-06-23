@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="table">
            <br><br>
            <h1>
                Registrar Tratado
            </h1>
            <br><br>
            <!-- Mensajes de error -->
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif

            <form action="{{ url('/tratado') }}" id="form" method="post">
                @csrf
                <div class="form-group">
                    <label for="id"> ID Tratado </label> <!-- old sirve para que no se te borre el dato en caso que hayas presionado guardar sin llenar lo demás -->
                    <input type="number" class="form-control" name="id" id="id" value=" {{ old('id') }} ">
                    <!-- Mensaje de error -->
                    <span style="color:red">@error('id'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="pais_import"> Pais importador </label>
                    <input type="text" class="form-control" name="pais_import" id="pais_import" value=" {{ old('pais_import') }} ">
                    <span style="color:red">@error('pais_import'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="impuesto"> Impuesto </label>
                    <input type="number" step='0.01' class="form-control" name="impuesto" id="impuesto" value=" {{ old('impuesto') }} ">
                    <span style="color:red">@error('impuesto'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="fec_tratado"> Fecha de Tratado </label>
                    <input type="date" class="form-control" name="fec_tratado" id="fec_tratado" value=" {{ old('fec_tratado') }} ">
                    <span style="color:red">@error('fec_tratado'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="pais_export"> Pais exportador </label>
                    <input type="text" class="form-control" name="pais_export" id="pais_export" value=" {{ old('pais_export') }} ">
                    <span style="color:red">@error('pais_export'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="producto"> Producto </label>
                    <input type="text" class="form-control" name="producto" id="producto" value=" {{ old('producto') }} ">
                    <span style="color:red">@error('producto'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control" value="Guardar datos">
                </div>
            </form>
        </div>
    </div>
@endsection