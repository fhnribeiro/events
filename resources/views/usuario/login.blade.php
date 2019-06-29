@extends('layout.master')
@section('content')
    <h1>Bem vindo!</h1>
    <hr>
    <form action="{{route('logar')}}" method="post">
        @csrf
        @method('POST')
        <div>
            <label for="login">Login:</label>
            <input type="text" name="login" id="login" value=""><br>
        </div>
        <div>
            <label for="senha">Login:</label>
            <input type="password" name="senha" id="senha" value=""><br>
        </div>
        <input type="submit" value="Logar" class="btn btn-primary">
    </form>
@endsection