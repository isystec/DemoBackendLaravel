<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recursodocumentos extends Model
{
    protected $table = 'recursodocumentos';
    protected $primaryKey = 'docum_id';
    public $timestamps = false;
    protected $fillable = [
        'usuario',
        'nombre_recurso',
        'fechahora',
        'roles',
        'estado'
    ];
    protected $guarded = [];
}
