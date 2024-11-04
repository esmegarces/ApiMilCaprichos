<?php

use App\Http\Controllers\DetallesPostresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route prueba
Route::get('/saludo', function () {
    return response()->json([
        'Mensaje' => 'Saludo',
        'nombre' => 'Esmeralda'
    ], 200);
});

// Route DetallesPostre
Route::get('/detalles_postres', [DetallesPostresController::class,'mostrar']);

