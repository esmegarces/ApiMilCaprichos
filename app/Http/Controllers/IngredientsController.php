<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
      //Obtenemos todos los detalles de los usuarios 
      public function mostrar()
      {
          //Obteniendo toda la información del modelo Ingredient
          $ingredient = Ingredient::get();
  
  
          // Validar si el arreglo esta vacío 
          if (count($ingredient) <= 0) {
              return response()->json([
                  'Mensaje' => 'No se han encontrado los ingredientes'
              ], 404);
          }
  
          return response()->json([
              'Mensaje' => 'Ingredientes encontrados',
              'ingredientes' => $ingredient
          ], 200);
      }
}
