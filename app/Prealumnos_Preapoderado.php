<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prealumnos_Preapoderado extends Model
{
    protected $table = 'prealumnos_preapoderados';
    protected $primaryKey = 'prealumn_preapod_id';
    public $timestamps = false;
    protected $fillable = [
        'prealumn_preapod_prealum_id',
        'prealumn_preapod_preapod_id'
    ];
    protected $guarded = [];
}
