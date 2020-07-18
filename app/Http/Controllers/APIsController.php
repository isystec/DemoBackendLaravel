<?php

namespace App\Http\Controllers;

use App\Prealumnos;
use App\Preapoderados;
use App\Prealumnos_Preapoderado;
use Exception;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Http\Request;

class APIsController extends Controller
{
    public function APISavePreApoderado(Request $request) {
        try {
            $dataPreApoderado = new Preapoderados;
            $dataPreApoderado->preapod_tipodocumento = $request->preapod_tipodocumento;
            $dataPreApoderado->preapod_identificacion = $request->preapod_identificacion;
            $dataPreApoderado->preapod_ape = $request->preapod_ape;
            $dataPreApoderado->preapod_nom = $request->preapod_nom;
            $dataPreApoderado->preapod_nacion_id = $request->preapod_nacion_id;
            $dataPreApoderado->preapod_sexo = $request->preapod_sexo;
            $dataPreApoderado->preapod_fnac = date($request->preapod_fnac);
            $dataPreApoderado->preapod_est = $request->preapod_est;
            $dataPreApoderado->preapod_email = $request->preapod_email;
            $dataPreApoderado->preapod_tel = $request->preapod_tel;
            $dataPreApoderado->save();
        } catch (Exception $exception) {
            return response()->json([
                'error' => true,
                'msg' => 'Ocurrio un error al momento del registro. Intente nuevamente en unos minutos'
            ]);
        }
        return $dataPreApoderado->attributesToArray();
    }

    public function APISavePreAlumno(Request $request) {
        try {
            $dataPreAlumno = new Prealumnos();
            $dataPreAlumno->prealum_tipo_documento = $request->prealum_tipo_documento;
            $dataPreAlumno->prealum_identificacion = $request->prealum_identificacion;
            $dataPreAlumno->prealum_ape = $request->prealum_ape;
            $dataPreAlumno->prealum_nom = $request->prealum_nom;
            $dataPreAlumno->prealum_identificacion = $request->prealum_identificacion;
            $dataPreAlumno->prealum_sexo = $request->prealum_sexo;
            $dataPreAlumno->prealum_fnac = date($request->prealum_fnac);
            $dataPreAlumno->prealum_gradopostula = $request->prealum_gradopostula;
            $dataPreAlumno->prealum_est = $request->prealum_est;
            $dataPreAlumno->save();

            $dataPreAlumnoPreApoderado = new Prealumnos_Preapoderado();
            $dataPreAlumnoPreApoderado->prealumn_preapod_prealum_id = $dataPreAlumno->prealum_id;
            $dataPreAlumnoPreApoderado->prealumn_preapod_preapod_id = $request->preapod_id;
            $dataPreAlumnoPreApoderado->save();
        } catch (Exception $exception) {
            return response()->json([
                'error' => true,
                'msg' => 'Ocurrio un error al momento del registro. Intente nuevamente en unos minutos'
            ]);
        }
        return $dataPreAlumno->attributesToArray();
    }

    public function APIExtraerDatosDni(Request $request) {
        try {
            $goutteClient = new Client();
            $guzzleClient = new GuzzleClient(array('timeout' => 60));
            $goutteClient->setClient($guzzleClient);

            $dni = $request->dni;
            $api = 'https://eldni.com/buscar-por-dni?dni=';
            $request_api = $api.$dni;

            $crawler = $goutteClient->request('GET', $request_api);
            $get_datos = $crawler->filter('tbody tr')->each(function ($node) {
                $get_dni = $node->filter('th')->text();
                $get_nombres = $node->filter('td')->text();
                $array_nombres = explode(' ', $get_nombres);
                $array_datos = explode(' ', $node->text());
                $get_apellidos = '';
                foreach ( $array_datos as $i) {
                    if ($i != $get_dni && !in_array($i, $array_nombres)) {
                        $get_apellidos = $get_apellidos.' '.$i;
                    }
                }
                return response()->json([
                    'dni' => trim($get_dni),
                    'nombres' => trim($get_nombres),
                    'apellidos' => trim($get_apellidos)
                ])->getData();
            });
        } catch (Exception $exception) {
            return response()->json([
                'error' => true,
                'msg' => 'Ocurrio un error al extraer datos. Ingrese datos manualmente'
            ]);
        }
        return $get_datos;
    }
}
