<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prealumnos extends Model
{
    protected $table = 'prealumnos';
    protected $primaryKey = 'prealum_id';
    public $timestamps = false;
    protected $fillable = [
        'prealum_tipo_documento',
        'prealum_identificacion',
        'prealum_ape',
        'prealum_nom',
        'prealum_nacionalidad_id',
        'prealum_sexo',
        'prealum_fnac',
        'prealum_gradopostula',
        'prealum_est'
    ];
    protected $guarded = [];
}
