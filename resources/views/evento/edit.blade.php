@extends('layout.master')
@section('content')
    <h1>{{$evento->nome}}</h1>
    <form action="{{route('eventos.update',$evento)}}" method="post">
        @csrf
        @method('PUT')
        <div class="input-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="input-text" id="nome" value="{{$evento->nome}}"><br>
        </div>
        <div>
            <label for="totIngr">Total de ingressos:</label>
            <input type="number" name="totalIngressos" id="totIngr" value="{{$evento->totalIngressos}}"><br>
        </div>
        <div>
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" value="{{$evento->data}}"><br>
        </div>
        <div>
            <label for="categoria">Categoria:</label>
            <select name="categoria" >
                @forelse($categorias as $categoria)
                    <option value="{{$categoria->id}}" {{$evento->categoria->id==$categoria->id?'selected=true':''}}>
                        {{$categoria->nome}}
                    </option>
                @empty
                    <option>Nenhuma categoria</option>
                @endforelse
            </select>

        </div>
        <input type="submit" value="Salvar" class="btn btn-primary">
    </form>
@endsection