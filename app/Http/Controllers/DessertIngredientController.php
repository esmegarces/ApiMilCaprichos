<?php

namespace App\Http\Controllers;

use App\Models\DessertIngredient;
use Illuminate\Http\Request;

class DessertIngredientController extends Controller
{
         //Obtenemos todos los detalles de los DessertIngredient 
         public function mostrar()
         {
             //Obteniendo toda la información del modelo DessertIngredient
             $postreingrediente = DessertIngredient::get();
     
     
             // Validar si el arreglo esta vacío 
             if (count($postreingrediente) <= 0) {
                 return response()->json([
                     'Mensaje' => 'No se han encontrado los postres con sus respectivos ingredientes'
                 ], 404);
             }
     
             return response()->json([
                 'Mensaje' => 'Postres con sus ingredientes  encontrados',
                 'postreingrediente' => $postreingrediente
             ], 200);
         }
}
