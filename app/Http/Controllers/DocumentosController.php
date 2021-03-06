<?php

namespace App\Http\Controllers;
use App\Prealumnos;
use App\Preapoderados;
use App\Recursodocumentos;
use Illuminate\Http\Request;
use DB;

class DocumentosController extends Controller
{
    public function index()
    {
        $data = DB::table('Preapoderados')->get();
        return view('documentos.index',['preapoderados'=>$data]);
    }
    public function create()
    {
        //
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
        $documento= Recursodocumentos::find($id);
        $request->all();
        $documento->update($request->all());
        return redirect()->route('listardoc',[$request->usuario])->with('status','Estado editado correctamente');
    }
    public function destroy($id)
    {
        //
    }
    public function verdocumento($id)
    {
        $prueba = Preapoderados::find($id);
        $alumnos = DB::table('prealumnos_preapoderados')
            ->join('prealumnos','prealumnos.prealum_id','prealumnos_preapoderados.prealumn_preapod_prealum_id')
            ->join('paises','paises.pais_id','prealumnos.prealum_nacionalidad_id')
            ->join('preapoderados','preapoderados.preapod_id','prealumnos_preapoderados.prealumn_preapod_preapod_id')
            ->where('prealumnos_preapoderados.prealumn_preapod_preapod_id','=',$id)
            ->get();
        return view('documentos.detalle',['alumnos' => $alumnos,'preapod'=> $prueba]);
    }
    public function listardocumentos($id)
    {
        $prealumnos= Prealumnos::find($id);
        $prealumdoc= DB::table('recursodocumentos')
            ->join('prealumnos','prealumnos.prealum_id','recursodocumentos.usuario')
            ->where('prealumnos.prealum_id','=',$id)
            ->get();
        return view('documentos.listardocumentos',['prealum'=>$prealumnos,'preadoc'=>$prealumdoc]);
    }
}
