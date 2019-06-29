@extends('layout.master')
@section('content')
    <h1>{{$categoria->nome}}</h1>
    <hr>
    <p>
{{--        <a href="{{route('categorias.index')}}" class="btn btn-info">Todos as categorias</a>--}}
        <a href="{{route('categorias.edit',$categoria)}}" class="btn btn-primary">Editar categoria</a>
    </p>
    <div class="pull-rigth">
        <form action="{{route('categorias.destroy',$categoria)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
    </div>
@endsection