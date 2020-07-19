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
    public function ver()
    {
        return view('preinscripciones.detalle');
    }

    public function prueba($id)
    {
        $data = DB::table('prealumnos_preapoderados')
            ->join('prealumnos','prealumnos.prealum_id','prealumnos_preapoderados.prealumn_preapod_prealum_id')
            ->where('prealumnos_preapoderados.prealumn_preapod_preapod_id','=',$id)
            ->get();
        print_r($data);
    }
}
