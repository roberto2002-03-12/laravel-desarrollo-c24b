@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="table">
            <br><br>
            <h1>
                Registrar Pais
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

            <form action="{{ url('/pais') }}" id="form" method="post">
                @csrf
                <div class="form-group">
                    <label for="id"> ID Pais </label> <!-- old sirve para que no se te borre el dato en caso que hayas presionado guardar sin llenar lo demás -->
                    <input type="number" class="form-control" name="id" id="id" value=" {{ old('id') }} ">
                    <!-- Mensaje de error -->
                    <span style="color:red">@error('id'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="nombre"> Nombre </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value=" {{ old('nombre') }} ">
                    <span style="color:red">@error('nombre'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="presi_actual"> Presidente actual </label>
                    <input type="text" class="form-control" name="presi_actual" id="presi_actual" value=" {{ old('presi_actual') }} ">
                    <span style="color:red">@error('presi_actual'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="fec_newpresi"> Fecha de  uevo presidente </label>
                    <input type="date" class="form-control" name="fec_newpresi" id="fec_newpresi" value=" {{ old('fec_newpresi') }} ">
                    <span style="color:red">@error('fec_newpresi'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control" value="Guardar datos">
                </div>
            </form>
        </div>
    </div>
@endsection