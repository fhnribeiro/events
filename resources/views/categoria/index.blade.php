@extends('layout.master')
@section('content')
    <h1>Lista de Responsáveis</h1>
    <p class="lead">
        <a href="{{route('categorias.create')}}" class="btn btn-primary">Adicionar novo?</a>
    </p>
    <div class="p-3">
        <ul class="list-group">
            @forelse($categorias as $categoria)
                <li class="list-group-item">
                    <a href="{{route('categorias.show',$categoria)}}">
                        {{$categoria->nome}}
                    </a>
                    <a href="{{route('categorias.edit',$categoria)}}" class="btn btn-primary float-right">Editar</a>
                    <div class="float-right mr-2">
                        <form action="{{route('categorias.destroy',$categoria)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </div>
                </li>
            @empty
                <li>Nenhum registro</li>
            @endforelse
        </ul>
    </div>
@endsection