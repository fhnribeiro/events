@extends('layout.master')
@section('content')
    <h1>{{$evento->nome}}</h1>
    <hr>
    <p>
        {{--        <a href="{{route('categorias.index')}}" class="btn btn-info">Todos as categorias</a>--}}
        <a href="{{route('eventos.edit',$evento)}}" class="btn btn-primary">Editar evento</a>
    </p>
    <div class="pull-rigth">
        <form action="{{route('eventos.destroy',$evento)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
    </div>
@endsection