@extends('layouts.app')

@section('content')
    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif
    
    <div class="container">
        <div id="table">
            <br><br>
            <h1>
            Tratados
            </h1>
            <br><br>
            <table class="table table-info table-striped" width="80" id="tableTratadp">
                <thead>
                    <tr>
                        <th class="text-center">ID tratado</th>
                        <th class="text-center">Pais importador</th>
                        <th class="text-center">Impuesto</th>
                        <th class="text-center">Fecha de tratado</th>
                        <th class="text-center">Pais exportador</th>
                        <th class="text-center">Producto</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tratados as $tratado)
                        <tr>
                            <td class="text-center">{{ $tratado -> id }}</td>
                            <td class="text-center">{{ $tratado -> pais_import }}</td>
                            <td class="text-center">{{ $tratado -> impuesto }}</td>
                            <td class="text-center">{{ $tratado -> fec_tratado }}</td>
                            <td class="text-center">{{ $tratado -> pais_export }}</td>
                            <td class="text-center">{{ $tratado -> producto }}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm">
                                    <a href="{{ url('tratado/'.$tratado->id.'/edit') }}"> Editar </a>
                                </button>
                                <form action="{{ url('/tratado/'.$tratado->id) }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button id="button" type="button"  class="btn btn-primary"> <a style="color:white" href="{{ url('tratado/create') }}"> Registrar Tratado </a> </button>
        </div>
    </div>
@endsection