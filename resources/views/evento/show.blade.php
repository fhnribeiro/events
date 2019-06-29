@extends('layout.master')
@section('content')

    <div class="p-2">
        <div class="card w-75">
            <div class="card-header">
                {{$evento->nome}} -
                {{$evento->categoria->nome}}
            </div>
            <div class="card-body">
                <div>
                    Data: {{$evento->data}}
                </div>
                <div>
                    Total de ingressos: {{$evento->totalIngressos}}
                </div>
            </div>
        </div>
    </div>
@endsection