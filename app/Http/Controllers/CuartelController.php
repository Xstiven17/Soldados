<?php

namespace App\Http\Controllers;
use App\Models\Cuartel;

use Illuminate\Http\Request;

class CuartelController extends Controller
{
    function create() {
        return view('cuartelT');
    }
    function store(Request $request) {
        $cuartel = new Cuartel();
        $cuartel->nombre = $request->nombre;
        $cuartel->ubicacion = $request->ubicacion;
        $cuartel->save();
        return "";
    }
}
