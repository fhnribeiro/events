<?php

namespace eventos;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public function Categoria(){
        return $this->belongsTo(Categoria::class);
    }

    protected $fillable=[
        'tipo',
        'totalIngressos',
        'data',
        'nome'
    ];
}
