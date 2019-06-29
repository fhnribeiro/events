@extends('layout.master')
@section('content')
    <h1>Adicionar evento</h1>
    <hr>
    <form action="{{route('eventos.store')}}" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br>
        <br>
        <label for="imagem">Imagem:</label>
        <input type="text" name="imagem" id="imagem"><br>
        <br>
        <label for="tipo">Tipo:</label>
        <input type="number" name="tipo" id="tipo"><br>
        <br>
        <label for="totIngr">Total de ingressos:</label>
        <input type="number" name="totIngr" id="totIngr"><br>
        <br>
        <label for="data">Data:</label>
        <input type="date" name="data" id="data"><br>
        <br>
        <label for="categoria">Categoria:</label>
        <input type="number" name="categoria" id="categoria"><br>
        <br>


        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
@endsection