@extends('layout.master')
@section('content')
    <h1>Adicionar categoria</h1>
    <hr>
    <form action="{{route('usuarios.store')}}" method="post">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"><br>
        </div>
        <div>
            <label for="login">Login:</label>
            <input type="text" name="login" id="login"><br>
        </div>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha"><br>
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
@endsection