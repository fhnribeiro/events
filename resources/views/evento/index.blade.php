@extends('layout.master')
@section('content')
    <h1>Lista de Eventos</h1>
    <p class="lead">
        <a href="{{route('eventos.create')}}">Adicionar novo?</a>
    </p>
    <div class="p-3">
        <ul class="list-group">
        @forelse($eventos as $evento)
            <li class="list-group-item">
                <a href="{{route('eventos.show',$evento)}}">
                    {{$evento->nome}}
                </a>
                <a href="{{route('eventos.edit',$evento)}}" class="btn btn-primary float-right">Editar</a>
            </li>
        @empty
            <li class="list-group-item disabled">Nenhum registro</li>
        @endforelse
        </ul>
    </div>
@endsection