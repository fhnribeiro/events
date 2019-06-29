@extends('layout.master')
@section('content')
    <h1>Editar Categoria</h1>
    <hr>
    <form action="{{route('categorias.update',$categoria)}}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="nome" id="name" value="{{$categoria->nome}}"><br>
        <br>
        <input type="submit" value="Alterar" class="btn btn-primary">
    </form>
@endsection