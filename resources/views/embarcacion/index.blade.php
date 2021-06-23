@extends('layouts.app')

@section('content')
    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif
    
    <div class="container">
        <div id="table">
            <br><br>
            <h1>
            Embarcación
            </h1>
            <br><br>
            <table class="table table-info table-striped" width="80" id="tableEmbarcacion">
                <thead>
                    <tr>
                        <th class="text-center">ID Embarcación</th>
                        <th class="text-center">Cantidad de Tripulación</th>
                        <th class="text-center">Destino</th>
                        <th class="text-center">Fecha estimida de Partición</th>
                        <th class="text-center">Fecha estimida de Arribación</th>
                        <th class="text-center">Número de Comunicación</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($embarcaciones as $embarcacion)
                        <tr>
                            <td class="text-center">{{ $embarcacion -> id }}</td>
                            <td class="text-center">{{ $embarcacion -> cantidad_tripu }}</td>
                            <td class="text-center">{{ $embarcacion -> destino }}</td>
                            <td class="text-center">{{ $embarcacion -> inicio }}</td>
                            <td class="text-center">{{ $embarcacion -> llegada }}</td>
                            <td class="text-center">{{ $embarcacion -> nro_comunicacion }}</td>

                            <td>
                                <button type="button" class="btn btn-warning btn-sm">
                                    <a href="{{ url('embarcacion/'.$embarcacion->id.'/edit') }}"> Editar </a>
                                </button>
                                <form action="{{ url('/embarcacion/'.$embarcacion->id) }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button id="button" type="button"  class="btn btn-primary"> <a style="color:white" href="{{ url('embarcacion/create') }}"> Registrar Embarcacion </a> </button>
        </div>
    </div>
@endsection