<?php

namespace App\Http\Controllers;

//use App\Prealumnos;
use App\Preapoderados;
use Illuminate\Http\Request;

class FormPreMatriculaController extends Controller
{
    public function APISavePreMatricula(Request $request) {
        $dataPreApoderado = new Preapoderados;
//        $dataPreAlumno = new Prealumnos;
//        $dataPreApoderado->create($request->all());
//        $dataPreApoderado->preapod_tipodocumento = $request->preapod_tipodocumento;
//        $dataPreApoderado->save();
        $dataPreApoderado->preapod_tipodocumento = 1;
        $dataPreApoderado->preapod_identificacion = 65165;
        $dataPreApoderado->preapod_ape = 'Rodriguez Romero';
        $dataPreApoderado->preapod_nom = 'Alejandro';
        $dataPreApoderado->preapod_nacion_id = 1;
        $dataPreApoderado->preapod_sexo = 1;
        $dataPreApoderado->preapod_fnac = date("2020-07-14");
        $dataPreApoderado->preapod_est = 1;
        $dataPreApoderado->preapod_email = "prueba@prueba.com";
        $dataPreApoderado->preapod_tel = "156566556";
        $dataPreApoderado->save();
        return $request->query();
    }
}
