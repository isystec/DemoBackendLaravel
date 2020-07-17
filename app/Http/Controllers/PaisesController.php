<?php

namespace App\Http\Controllers;

use App\Paises;

class PaisesController extends Controller
{
    public function APIListPaises()
    {
        $data = new Paises;
        return $data::all(); 
    }

}
