@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="table">
            <br><br>
            <h1>
                Registrar Container
            </h1>
            <br><br><!-- en este caso la url container también se refiere a store -->

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

            <form action="{{ url('/container') }}" id="form" method="post">
                @csrf
                <div class="form-group">
                    <label for="id"> ID Container </label>
                    <input type="number" class="form-control" name="id" id="id" value=" {{ old('id') }} ">
                    <span style="color:red">@error('id'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="tipo_producto"> Tipo de Producto </label>
                    <input type="text" class="form-control" name="tipo_producto" id="tipo_producto" value=" {{ old('tipo_producto') }} ">
                    <span style="color:red">@error('tipo_producto'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="dimensiones"> Dimensiones </label>
                    <input type="text" class="form-control" name="dimensiones" id="dimensiones" value=" {{ old('dimensiones') }} ">
                    <span style="color:red">@error('dimensiones'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <label for="id_embarcacion"> ID Embarcacion </label>
                    <input type="number" class="form-control" name="id_embarcacion" id="id_embarcacion" value=" {{ old('id_embarcacion') }} ">
                    <span style="color:red">@error('id_embarcacion'){{ $message }} @enderror</span>
                    <br>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control" value="Guardar datos">
                    <br>
                    <a href="{{ url('container') }}" class="btn btn-info btn-block" >Atrás</a>
                </div>
            </form>
        </div>
    </div>
@endsection