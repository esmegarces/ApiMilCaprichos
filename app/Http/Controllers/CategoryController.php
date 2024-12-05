<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
      //Obtenemos todos los detalles de los usuarios 
      public function mostrar()
      {
          //Obteniendo toda la información del modelo Category
          $categories = Category::get();
  
  
          // Validar si el arreglo esta vacío 
          if (count($categories) <= 0) {
              return response()->json([
                  'Mensaje' => 'No se han encontrado las categorias'
              ], 404);
          }
  
          return response()->json([
              'Mensaje' => 'categorias encontradas',
              'categorias' => $categories
          ], 200);
      }
}
