@extends('layout.master')
@section('content')
    <h1>Editar Resposável</h1>
    <p class="lead">Edite o responsável a seguir:</p>
    <hr>
    <form action="{{route('categoria',$sponsor)}}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{$sponsor->name}}"><br>
        <label for="role">Função:</label>
        <input type="text" name="role" id="role" value="{{$sponsor->role}}"><br>
        <br>
        <input type="submit" value="Alterar" class="btn btn-primary">
    </form>
@endsection