<?php

namespace App\Http\Controllers;
use App\Models\Compañia;

use Illuminate\Http\Request;

class CompañiaController extends Controller
{
    function create() {
        return view('compañiaT');
    }
    function store(Request $request) {
        $compañia = new Compañia();
        $compañia->actividad_principal = $request->actividad_principal;
        $compañia->save();
        return "";
    }
}
