<?php

namespace eventos;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable=[
        'nome',
        'login',
        'senha'
    ];
}
