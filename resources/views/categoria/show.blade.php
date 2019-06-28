@extends('layout.master')
@section('content')
    <h1>{{$sponsor->name}}</h1>
    <p class="lead">{{$sponsor->role}}</p>
    <hr>
    <p>
        <a href="{{route('categoria')}}" class="btn btn-info">Todos os Responsáveis</a>
        <a href="{{route('sponsors.edit',$sponsor)}}" class="btn btn-primary">Editar Responsável</a>
    </p>
    <div class="pull-rigth">
        <form action="{{route('categoria',$sponsor)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar Resposável</button>
        </form>
    </div>
@endsection