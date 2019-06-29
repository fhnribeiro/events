<?php

namespace eventos;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable=[
        'tipo',
        'totalIngressos',
        'data',
        'nome'
    ];
}
