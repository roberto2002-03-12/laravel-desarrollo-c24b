@extends('layouts.app')

@section('content')
    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif
    
    <div class="container">
        <div id="table">
            <br><br>
            <h1>
            Usuarios
            </h1>
            <br><br>
            <table class="table table-info table-striped" width="80" id="tableContainer">
                <thead>
                    <tr>
                        <th class="text-center">ID Usuario</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="text-center">{{ $user -> id }}</td>
                            <td class="text-center">{{ $user -> name }}</td>
                            <td class="text-center">{{ $user -> email }}</td>
                            <td class="text-center">{{ $user -> user_type }}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm">
                                    <a href="{{ url('user/'.$user->id.'/edit') }}"> Editar </a>
                                </button>
                                <form action="{{ url('/user/'.$user->id) }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
