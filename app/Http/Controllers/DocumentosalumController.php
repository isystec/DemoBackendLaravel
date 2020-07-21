<?php

namespace App\Http\Controllers;
use App\Prealumnos;
use App\Preapoderados;
use Illuminate\Http\Request;
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

    public function listardocumentosalum()
    {
        return view('documentosalum.listardocumentoalum');
    }
}
