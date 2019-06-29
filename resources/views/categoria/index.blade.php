@extends('layout.master')
@section('content')
    <h1>Lista de Responsáveis</h1>
    <p class="lead">
        <a href="{{route('categorias.create')}}">Adicionar novo?</a>
    </p>
    <ul>
        @forelse($categorias as $categoria)
            <li><a href="{{route('categorias.show',$categoria)}}">
                    {{$categoria->nome}}
                </a></li>
        @empty
            <li>Nenhum registro</li>
        @endforelse
    </ul>
@endsection