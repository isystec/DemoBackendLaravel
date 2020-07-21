<?php

namespace App\Http\Controllers;
use App\Prealumnos;
use App\Preapoderados;
use App\Recursodocumentos;
use Illuminate\Http\Request;
use Auth;
use DB;

class DocumentosalumController extends Controller
{
    public function index()
    {
        return view('documentosalum.listardocumentoalum');
    }
    public function create()
    {
        //
    }
    public function store(Request $req)
    {
//        $data= $req->all();
//        print_r($data);
        // Cargamos el archivo en el server

        $file1 = $req->file('consta');
        $filename1 = time() . '_' . $file1->getClientOriginalName();
        $file1->storeAs('documentosalum/'.$req->consta_matri, $filename1);

        $file2 = $req->file('reso_direc');
        $filename2 = time() . '_' . $file2->getClientOriginalName();
        $file2->storeAs('documentosalum/'.$req->consta_matri, $filename2);

        $file3 = $req->file('copi_dni_apodymenor');
        $filename3 = time() . '_' . $file3->getClientOriginalName();
        $file3->storeAs('documentosalum/'.$req->consta_matri, $filename3);

        $file4 = $req->file('foto_pasaporte');
        $filename4 = time() . '_' . $file4->getClientOriginalName();
        $file4->storeAs('documentosalum/'.$req->consta_matri, $filename4);

        $file5 = $req->file('certi_noadeudo');
        $filename5 = time() . '_' . $file5->getClientOriginalName();
        $file5->storeAs('documentosalum/'.$req->consta_matri, $filename5);

       // Creamos el objeto en la base de datos
        $rec_rol;
        if(Auth::user()->hasrole('secre'))
        {
            $rec_rol = 1;
        } elseif(Auth::user()->hasrole('prealum')){
            $rec_rol = 2;
        }
        $data = $req->all();
        $obj = Recursodocumentos::create([
            'usuario' => Auth::user()->id,
            'nombre_recurso' => $filename1,
            'roles' => $rec_rol,
            'estado' => 0
        ]);
        $obj = Recursodocumentos::create([
            'usuario' => Auth::user()->id,
            'nombre_recurso' => $filename2,
            'roles' => $rec_rol,
            'estado' => 0
        ]);
        $obj = Recursodocumentos::create([
            'usuario' => Auth::user()->id,
            'nombre_recurso' => $filename3,
            'roles' => $rec_rol,
            'estado' => 0
        ]);
        $obj = Recursodocumentos::create([
            'usuario' => Auth::user()->id,
            'nombre_recurso' => $filename4,
            'roles' => $rec_rol,
            'estado' => 0
        ]);
        $obj = Recursodocumentos::create([
            'usuario' => Auth::user()->id,
            'nombre_recurso' => $filename5,
            'roles' => $rec_rol,
            'estado' => 0
        ]);
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

    public function listardocumentosalum()
    {
        return view('documentosalum.listardocumentoalum');
    }
}
