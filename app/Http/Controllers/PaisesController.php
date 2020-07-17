<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Paises;

class PaisesController extends Controller
{
    public function index()
    {
        $data = new Paises;
        return $data::all(); 
    }

}
