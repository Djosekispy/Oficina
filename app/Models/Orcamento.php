<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable = [
        'total',
        'status',
        'id_servico',
        'id_cliente'
    ];
}
