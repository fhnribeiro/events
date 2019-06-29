@extends('layout.master')
@section('content')
    <h1>Adicionar categoria</h1>
    <hr>
    <form action="{{route('categorias.store')}}" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br>
        <br>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
@endsection