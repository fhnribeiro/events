@extends('layout.master')
@section('content')
    <h1>Lista de Eventos</h1>
    <p class="lead">
        <a href="{{route('eventos.create')}}">Adicionar novo?</a>
    </p>
    <ul>
        @forelse($eventos as $evento)
            <li><a href="{{route('eventos.show',$evento)}}">
                    {{$evento->nome}}
                </a></li>
        @empty
            <li>Nenhum registro</li>
        @endforelse
    </ul>
@endsection