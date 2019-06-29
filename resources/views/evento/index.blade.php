@extends('layout.master')
@section('content')
    <h1>Lista de Responsáveis</h1>
    <p class="lead">
        <a href="{{route('categoria')}}">Adicionar novo?</a>
    </p>
    <ul>
        @forelse($sponsors as $sponsor)
            <li><a href="{{route('sponsors.show',$sponsor)}}">
                    {{$sponsor->name}}
                </a></li>
        @empty
            <li>Nenhum registro</li>
        @endforelse
    </ul>
@endsection