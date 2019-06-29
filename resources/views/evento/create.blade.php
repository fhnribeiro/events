@extends('layout.master')
@section('content')
    <h1>Adicionar evento</h1>
    <hr>
    <form action="{{route('eventos.store')}}" method="post">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome"><br>
        </div>
        <div>
            <label for="totIngr">Total de ingressos:</label>
            <input type="number" name="totalIngressos" id="totIngr"><br>
        </div>
        <div>
            <label for="data">Data:</label>
            <input type="date" name="data" id="data"><br>
        </div>
        <div>
            <label for="categoria">Categoria:</label>
            <select name="categoria">
                @forelse($categorias as $categoria)
                    <option value="{{$categoria->id}}">
                        {{$categoria->nome}}
                    </option>
                @empty
                    <option>Nenhuma categoria</option>
                @endforelse
            </select>

        </div>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
@endsection