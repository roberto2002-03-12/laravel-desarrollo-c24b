@extends('layouts.app')

@section('content')
<div class="container">
    <div id="table">
        <br><br>
        <h1>
            Editar Usuario
        </h1>
        <br><br>
        <form action="{{ url('/user/'.$user->id) }}" id="form" method="post">
            @csrf
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="name"> Name </label>
                <input type="text" class="form-control" value="{{ $user['name'] }}" name="name" id="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>
            </div>
            <div class="form-group">
                <label for="email"> E-Mail Address </label>
                <input type="text" class="form-control" value="{{ $user['email'] }}" name="email" id="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>
            </div>
            <div class="form-group">
                <label for="id_embarcacion"> Tipo de usuario </label>
                <select id="user_type" type="user_type" class="form-control" name="user_type" value="{{ $user['user_type'] }}">
                    <option value="admin">admin</option> 
                    <option value="user">user</option> 
                </select>
                @error('user_type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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