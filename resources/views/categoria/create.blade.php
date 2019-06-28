@extends('layout.master')
@section('content')
    <h1>Adicionar Resposável</h1>
    <p class="lead">Adicione o responsável a seguir:</p>
    <hr>
    <form action="{{route('categoria')}}" method="post">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name"><br>
        <label for="role">Função:</label>
        <input type="text" name="role" id="role"><br>
        <br>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
@endsection