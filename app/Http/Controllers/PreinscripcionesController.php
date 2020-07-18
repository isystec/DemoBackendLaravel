<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PreinscripcionesController extends Controller
{
    public function index()
    {
        return view('preinscripciones.index');
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
}
