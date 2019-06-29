<?php

namespace eventos;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function eventos()
    {
        return $this->hasMany(Categoria::class);
    }

    protected $fillable=[
        'nome'
    ];



}
