<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preapoderados extends Model
{
    protected $table = 'preapoderados';
    protected $primaryKey = 'preapod_id';
    public $timestamps = false;
    protected $fillable = [
        'preapod_tipodocumento',
        'preapod_identificacion',
        'preapod_ape',
        'preapod_nom',
        'preapod_nacion_id',
        'preapod_sexo',
        'preapod_fnac',
        'preapod_est',
        'preapod_email',
        'preapod_tel'

    ];
    protected $guarded = [];
}
