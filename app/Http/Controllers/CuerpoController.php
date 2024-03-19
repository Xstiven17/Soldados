<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuerpo;

class CuerpoController extends Controller
{
    function create() {
        return view('CuerpoT');
    }
    function store(Request $request) {
        $cuerpo = new Cuerpo();
        $cuerpo->categoria = $request->categoria;
        $cuerpo->denominacion = $request->denominacion;
        $cuerpo->save();
        return "";
    }
}
