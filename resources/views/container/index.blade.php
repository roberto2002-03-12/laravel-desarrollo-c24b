@extends('layouts.app')

@section('content')
    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif
    
    <div class="container">
        <div id="table">
            <br><br>
            <h1>
            Container
            </h1>
            <br><br>
            <table class="table table-info table-striped" width="80" id="tableContainer">
                <thead>
                    <tr>
                        <th class="text-center">ID Container</th>
                        <th class="text-center">Tipo de productos</th>
                        <th class="text-center">Dimensiones</th>
                        <th class="text-center">ID Embarcacion</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($containers as $container)
                        <tr>
                            <td class="text-center">{{ $container -> id }}</td>
                            <td class="text-center">{{ $container -> tipo_producto }}</td>
                            <td class="text-center">{{ $container -> dimensiones }}</td>
                            <td class="text-center">{{ $container -> id_embarcacion }}</td>

                            <td>
                                <button type="button" class="btn btn-warning btn-sm">
                                    <a href="{{ url('container/'.$container->id.'/edit') }}"> Editar </a>
                                </button>
                                <form action="{{ url('/container/'.$container->id) }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button id="button" type="button"  class="btn btn-primary"> <a style="color:white" href="{{ url('container/create') }}"> Registrar Container </a> </button>
        </div>
    </div>
@endsection
