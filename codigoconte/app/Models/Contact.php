<?php

namespace apiPoseidon\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Contact extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome_empresa',
        'tel',
        'cel',
        'email',
        'endereco',
        'bairro',
        'numero',
        'referencia',
        'desc',
        'category_id',
        'cities_id'
    ];

}
