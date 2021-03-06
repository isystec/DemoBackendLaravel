<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Preapoderados;
Use DB;

class PreinscripcionesController extends Controller
{
    public function index()
    {
        $data = DB::table('Preapoderados')->get();
        return view('preinscripciones.index',['preapoderados'=>$data]);
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function ver($id)
    {
        $prueba = Preapoderados::find($id);
        $alumnos = DB::table('prealumnos_preapoderados')
            ->join('prealumnos','prealumnos.prealum_id','prealumnos_preapoderados.prealumn_preapod_prealum_id')
            ->join('paises','paises.pais_id','prealumnos.prealum_nacionalidad_id')
            ->join('preapoderados','preapoderados.preapod_id','prealumnos_preapoderados.prealumn_preapod_preapod_id')
            ->where('prealumnos_preapoderados.prealumn_preapod_preapod_id','=',$id)
            ->get();
        return view('preinscripciones.detalle',['alumnos' => $alumnos,'preapod'=> $prueba]);
    }
}
