@extends('layouts.app')

@section('content')
    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif
    
    <div class="container">
        <div id="table">
            <br><br>
            <h1>
            Paises
            </h1>
            <br><br>
            <table class="table table-info table-striped" width="80" id="tablePais">
                <thead>
                    <tr>
                        <th class="text-center">ID Pais</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">presidente actual</th>
                        <th class="text-center">Fecha de nuevo presidente</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paises as $pais)
                        <tr>
                            <td class="text-center">{{ $pais -> id }}</td>
                            <td class="text-center">{{ $pais -> nombre }}</td>
                            <td class="text-center">{{ $pais -> presi_actual }}</td>
                            <td class="text-center">{{ $pais -> fec_newpresi }}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm">
                                    <a href="{{ url('pais/'.$pais->id.'/edit') }}"> Editar </a>
                                </button>
                                <form action="{{ url('/pais/'.$pais->id) }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button id="button" type="button"  class="btn btn-primary"> <a style="color:white" href="{{ url('pais/create') }}"> Registrar Embarcacion </a> </button>
        </div>
    </div>
@endsection