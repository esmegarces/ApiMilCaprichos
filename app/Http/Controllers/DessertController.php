<?php

namespace App\Http\Controllers;

use App\Models\Dessert;
use App\Models\DessertIngredient;
use App\Models\DetallesPostre;
use App\Models\PersonDessert;
use DB;
use Illuminate\Http\Request;
use Storage;
use Validator;

class DessertController extends Controller
{
    //Obtenemos todos los detalles de los usuarios 
    public function mostrar()
    {
        //Obteniendo toda la información del modelo Dessert(Postre)
        $dessert = Dessert::get();


        // Validar si el arreglo esta vacío 
        if (count($dessert) <= 0) {
            return response()->json([
                'Mensaje' => 'No se han encontrado los postres'
            ], 404);
        }

        return response()->json([
            'Mensaje' => 'Postres encontrados',
            'postres' => $dessert
        ], 200);
    }


    // //Agregar un postre
    // public function addDessert(Request $request)
    // {
    //     //agregar un validator para validar los datos que se se reciben
    //     $validator = Validator::make($request->all(), [
    //         'ID_CATEGORY' => 'required|integer',
    //         'NAME' => 'required|string|max:40',
    //         'DESCRIPTION' => 'required|string|max:300',
    //         'ID_INGREDIENTS' => 'required|array',
    //         'QUANTITYS' => 'required|array',
    //         'UNIT_OF_MEASURES' => 'required|array',
    //         'ID_PERSON' => 'required|integer',
    //         'IMAGE' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);


    //     //Si el validador falla, se envía un mensaje de error
    //     if ($validator->fails()) {
    //         return response()->json([
    //             'Mensaje' => 'Error en la validación de los datos',
    //             'Errores' => $validator->errors()
    //         ], 400);
    //     }

    //     // Iniciar transacción para registrar los datos del postre

    //     DB::beginTransaction();//inicia la transaccion 
    //     // intentar guardar los datos
    //     try {

    //         //Reucperar la imagen
    //         $image = $request->file('IMAGE');
    //         $ruta = $image->store('images','public');
    //         $image_url = Storage::url($ruta);

    //         //Crear un registro de postre
    //         $dessert = new Dessert();

    //         $dessert->NAME = $request->NAME;
    //         $dessert->DESCRIPTION = $request->DESCRIPTION;
    //         $dessert->ID_CATEGORY = $request->ID_CATEGORY;
    //         $dessert->ID_PERSON = $request->ID_PERSON;
    //         $dessert->IMAGE_URL = $image_url;
    //         $dessert->save();

    //         //Recorrer los ingredientes para guardarlos en la tabla DessertIngredient
    //         for ($i = 0; $i < count($request->ID_INGREDIENTS); $i++) {
    //             $dessertIngredient = new DessertIngredient();
    //             $dessertIngredient->ID_INGREDIENT = $request->ID_INGREDIENTS[$i];
    //             $dessertIngredient->ID_DESSERT = $dessert->ID;
    //             $dessertIngredient->QUANTITY = $request->QUANTITYS[$i];
    //             $dessertIngredient->UNIT_OF_MEASURE = $request->UNIT_OF_MEASURES[$i];
    //             $dessertIngredient->save();
    //         }



    //         DB::commit();//se confirma la transaccion
    //         return response()->json([
    //             'Mensaje' => 'Datos guardados correctamente',
    //             'ID' => $dessert->ID
    //         ], 200);

    //         //Pero si falla 
    //     } catch (\Exception $e) {
    //         DB::rollBack();//se regresa a la transaccion
    //         return response()->json([
    //             'Mensaje' => 'Error al guardar los datos',
    //             'Error' => $e->getMessage()
    //         ], 500);

    //     }



    // }


    //Agregar un postre
    public function addDessert(Request $request)
    {
        //agregar un validator para validar los datos que se se reciben
        $validator = Validator::make($request->all(), [
            'ID_CATEGORY' => 'required|integer',
            'NAME' => 'required|string|max:40',
            'DESCRIPTION' => 'required|string|max:300',
            'ID_INGREDIENTS' => 'required|array',
            'QUANTITYS' => 'required|array',
            'UNIT_OF_MEASURES' => 'required|array',
            'ID_PERSON' => 'required|integer',
            'IMAGE' => 'required|string',
        ]);


        //Si el validador falla, se envía un mensaje de error
        if ($validator->fails()) {
            return response()->json([
                'Mensaje' => 'Error en la validación de los datos',
                'Errores' => $validator->errors()
            ], 400);
        }

        // Iniciar transacción para registrar los datos del postre

        DB::beginTransaction();//inicia la transaccion 
        // intentar guardar los datos
        try {

            // decode the base64 image
            $imageData = $request->IMAGE;
            $imageName = uniqid() . '.JPEG';
            $imagePath = 'images/' . $imageName;

            // save the image in the public disk
            Storage::disk('public')->put($imagePath, base64_decode($imageData));
            // generate the public URL for the image
            $URL_image = Storage::url($imagePath);

            //Crear un registro de postre
            $dessert = new Dessert();

            $dessert->NAME = $request->NAME;
            $dessert->DESCRIPTION = $request->DESCRIPTION;
            $dessert->ID_CATEGORY = $request->ID_CATEGORY;
            $dessert->ID_PERSON = $request->ID_PERSON;
            $dessert->IMAGE_URL = $URL_image;
            $dessert->save();

            //Recorrer los ingredientes para guardarlos en la tabla DessertIngredient
            for ($i = 0; $i < count($request->ID_INGREDIENTS); $i++) {
                $dessertIngredient = new DessertIngredient();
                $dessertIngredient->ID_INGREDIENT = $request->ID_INGREDIENTS[$i];
                $dessertIngredient->ID_DESSERT = $dessert->ID;
                $dessertIngredient->QUANTITY = $request->QUANTITYS[$i];
                $dessertIngredient->UNIT_OF_MEASURE = $request->UNIT_OF_MEASURES[$i];
                $dessertIngredient->save();
            }



            DB::commit();//se confirma la transaccion
            return response()->json([
                'Mensaje' => 'Datos guardados correctamente',
                'ID' => $dessert->ID
            ], 200);

            //Pero si falla 
        } catch (\Exception $e) {
            DB::rollBack();//se regresa a la transaccion
            return response()->json([
                'Mensaje' => 'Error al guardar los datos',
                'Error' => $e->getMessage()
            ], 500);

        }



    }

    //Actualizar un postre
    public function update(Request $request, $dessertid)
    {
        // Validar los datos que recibimos
        $validator = Validator::make($request->all(), [
            'ID_CATEGORY' => 'required|integer',
            'NAME' => 'required|string|max:40',
            'DESCRIPTION' => 'required|string|max:300',
            'ID_INGREDIENTS' => 'required|array',
            'QUANTITYS' => 'required|array',
            'UNIT_OF_MEASURES' => 'required|array',
            'IMAGE' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Si la validación falla, devolvemos un error
        if ($validator->fails()) {
            return response()->json([
                'Mensaje' => 'Error en la validación de los datos',
                'Errores' => $validator->errors()
            ], 400);
        }

        // Verificar si el `dessertid` es un número válido
        if (!is_numeric($dessertid)) {
            return response()->json([
                'Mensaje' => 'ID de postre inválido'
            ], 400);
        }

        // Buscar el postre por su ID
        $dessert = Dessert::find($dessertid);

        // Si no se encuentra, retornar error
        if (!$dessert) {
            return response()->json([
                'Mensaje' => 'No se ha encontrado el postre'
            ], 404);
        }

        DB::beginTransaction();
        try {
            //Reucperar la imagen
            $image = $request->file('IMAGE');
            $ruta = $image->store('images', 'public');
            $IMAGE_URL = Storage::url($ruta);


            // Actualizar los datos del postre
            $dessert->NAME = $request->NAME;
            $dessert->DESCRIPTION = $request->DESCRIPTION;
            $dessert->ID_CATEGORY = $request->ID_CATEGORY;
            $dessert->IMAGE_URL = $IMAGE_URL;
            $dessert->save();

            // Actualizar los ingredientes
            DessertIngredient::where('ID_DESSERT', $dessertid)->delete();

            for ($i = 0; $i < count($request->ID_INGREDIENTS); $i++) {
                $ingredient = new DessertIngredient();
                $ingredient->ID_DESSERT = $dessertid;
                $ingredient->ID_INGREDIENT = $request->ID_INGREDIENTS[$i];
                $ingredient->QUANTITY = $request->QUANTITYS[$i];
                $ingredient->UNIT_OF_MEASURE = $request->UNIT_OF_MEASURES[$i];
                $ingredient->save();
            }
            DB::commit();


            return response()->json([
                'Mensaje' => 'Datos actualizados correctamente',
                'ID' => $dessertid
            ], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'Mensaje' => 'Error al actualizar los datos',
                'Error' => $e->getMessage()
            ], 500);
        }
    }

    //Eliminar un postre

    public function delete($dessertid)
    {
        // Verificar si el 'dessertid' es un número válido
        if (!is_numeric($dessertid)) {
            return response()->json([
                'Mensaje' => 'ID de postre inválido'
            ], 400);
        }

        // Buscar el postre por su ID
        $dessert = Dessert::find($dessertid);

        // Si no se encuentra el postre, devolver un error
        if (!$dessert) {
            return response()->json([
                'Mensaje' => 'No se ha encontrado el postre con el ID proporcionado.'
            ], 404);
        }

        // Iniciar una transacción para asegurarse de que se eliminen todos los datos relacionados

        DB::beginTransaction();
        try {
            // Eliminar los ingredientes asociados al postre
            $deletedIngredients = DessertIngredient::where('ID_DESSERT', $dessertid)->delete();
            \Log::info("Ingredientes eliminados: " . $deletedIngredients);

            // Eliminar el postre
            $dessert->delete();

            // Confirmar la transacción
            DB::commit();

            return response()->json([
                'Mensaje' => 'Postre eliminado correctamente'
            ], 200);

        } catch (\Exception $e) {
            // Deshacer la transacción en caso de error
            DB::rollBack();
            \Log::error("Error al eliminar el postre: " . $e->getMessage());

            // Devolver el mensaje de error
            return response()->json([
                'Mensaje' => 'Error al eliminar el postre',
                'Error' => $e->getMessage()
            ], 500);
        }
    }

    //Obtenemos un postre en específico
    public function getdessert($dessertid)
    {

        //Obteniendo la informacion del postre
        $dessert = DetallesPostre::where('ID', $dessertid)->first();

        //Validar si el postre no existe
        if (!$dessert) {
            return response()->json([
                'Mensaje' => 'No se ha encontrado el postre'
            ], 404);
        }

        //Si el postre existe se envía la información del postre
        return response()->json([
            'Mensaje' => 'Postre encontrado',
            'postre' => $dessert
        ], 200);


    }

    //Filtrar por un categoria

    public function filter($category_name)
    {
        $postres = DetallesPostre::where('NAME_CATEGORY', $category_name)->get();

        //Validar si no se encontraron postres
        if (count($postres) <= 0) {
            return response()->json([
                'Mensaje' => 'No se han encontrado postres'
            ], 404);
        }

        return response()->json([
            'Mensaje' => 'Postres encontrados',
            'Postres' => $postres
        ], 200);


    }



}
