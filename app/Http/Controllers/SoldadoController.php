<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soldado; 

class SoldadoController extends Controller
{
public function create(){

return view('soldadoT');

}
function store(Request $request) {
    $soldado = new Soldado();
    $soldado->nombres = $request->nombres;
    $soldado->apellidos = $request->apellidos;
    $soldado->grado = $request->grado;
    $soldado->save();
    return "";
}
}

