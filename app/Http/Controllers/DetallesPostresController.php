<?php

namespace App\Http\Controllers;

use App\Models\DetallesPostre;
use Illuminate\Http\Request;

class DetallesPostresController extends Controller
{
    //Obtenemos todos los detalles de los postres 
    public function mostrar()
    {
        //Obteniendo toda la información del modelo DetallesPostre
        $postres = DetallesPostre::get();


        // Validar si el arreglo esta vacío 
        if (count($postres) <= 0) {
            return response()->json([
                'Mensaje' => 'No se han encontrado los postres'
            ], 404);
        }

        return response()->json([
            'Mensaje' => 'Postres encontrados',
            'Postres' => $postres
        ], 200);
    }
}
