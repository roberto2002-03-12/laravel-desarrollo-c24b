@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="table">
            <br><br>
            <h1>
                Registrar Embarcación
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

            <form action="{{ url('/embarcacion') }}" id="form" method="post">
                @csrf
                <div class="form-group">
                    <label for="id"> ID Embarcacion </label> <!-- old sirve para que no se te borre el dato en caso que hayas presionado guardar sin llenar lo demás -->
                    <input type="number" class="form-control" name="id" id="id" value=" {{ old('id') }} ">
                    <!-- Mensaje de error -->
                    <span style="color:red">@error('id'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="cantidad_tripu"> Cantidad de Tripulación </label>
                    <input type="number" class="form-control" name="cantidad_tripu" id="cantidad_tripu" value=" {{ old('cantidad_tripu') }} ">
                    <span style="color:red">@error('cantidad_tripu'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="destino"> Destino </label>
                    <input type="text" class="form-control" name="destino" id="destino" value=" {{ old('destino') }} ">
                    <span style="color:red">@error('destino'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="inicio"> Fecha estimida de Partición </label>
                    <input type="date" class="form-control" name="inicio" id="inicio" value=" {{ old('inicio') }} ">
                    <span style="color:red">@error('inicio'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="llegada"> Fecha estimida de Arribación </label>
                    <input type="date" class="form-control" name="llegada" id="llegada" value=" {{ old('llegada') }} ">
                    <span style="color:red">@error('llegada'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="nro_comunicacion"> Número de Comunicación de la embarcación </label>
                    <input type="number" class="form-control" name="nro_comunicacion" id="nro_comunicacion" value="{{ old('nro_comunicacion') }}">
                    <span style="color:red">@error('nro_comunicacion'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control" value="Guardar datos">
                </div>
            </form>
        </div>
    </div>
@endsection