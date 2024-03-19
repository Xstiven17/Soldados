<?php

use App\Http\Controllers\CompañiaController;
use App\Http\Controllers\CuartelController;
use App\Http\Controllers\SoldadoController;
use App\Http\Controllers\CuerpoController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/soldado', [SoldadoController::class,'create'])->name('mostrarSoldado');
Route::post('/soldado-store', [SoldadoController::class,'store'])->name('storeSoldado');

Route::get('/cuerpo', [CuerpoController::class,'create'])->name('mostrarCuerpo');
Route::post('cuerpo-store', [CuerpoController::class,'store'])->name('storeCuerpo');

Route::get('/cuartel', [CuartelController::class,'create'])->name('mostrarCuartel');
Route::post('/cuartel-store', [CuartelController::class,'store'])->name('storeCuartel');

Route::get('/compañia', [CompañiaController::class,'create'])->name('mostrarCompañia');
Route::post('/compañia-store', [CompañiaController::class,'store'])->name('storeCompañia');